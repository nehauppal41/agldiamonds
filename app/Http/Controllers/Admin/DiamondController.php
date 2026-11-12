<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Diamond;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Symfony\Component\Process\Process;

class DiamondController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'diamond_type' => [
                'required',
                Rule::in(['studded', 'solitaire']),
            ],

            'description' => 'required|string|max:255',

            /* Original Jewellery Type validation retained:
             *             'jewellery_type' => [
             *                 Rule::requiredIf(
             *                     $request->input('diamond_type') === 'studded'
             *                 ),
             *                 'nullable',
             *                 'string',
             *                 'max:100',
             *             ],
             */

            'metal' => 'nullable|string|max:100',

            'total_weight' => [
                'nullable',
                'numeric',
                'min:0',
                'max:9999999.999',
            ],

            'total_carat_weight' => [
                'required',
                'numeric',
                'gt:0',
                'max:9999999.999',
            ],

            'center_diamond_weight' => [
                'nullable',
                'numeric',
                'min:0',
                'max:9999999.999',
            ],

            'diamond_shape' => 'required|string|max:100',
            'color_grade' => 'required|string|max:50',
            'clarity_grade' => 'required|string|max:50',

            'cut_grade' => 'nullable|string|max:50',
            'measurements' => 'nullable|string|max:100',
            'polish' => 'nullable|string|max:50',
            'symmetry' => 'nullable|string|max:50',
            'fluorescence' => 'nullable|string|max:100',

            'diamond_comments' => 'nullable|string',
            'issue_date' => 'nullable|date',
            'is_published' => 'nullable|boolean',

            // The current shared form uses this field name.
            'gemstone_photo' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:5120',
            ],
        ]);

        // Generate a unique report number within the diamonds table.
        do {
            $reportNumber = 'AGL' . now()->format('ymdHis')
                . random_int(10, 99);
        } while (
            Diamond::where('report_number', $reportNumber)->exists()
        );

        $photoPath = null;

        if ($request->hasFile('gemstone_photo')) {
            $uploadDirectory = dirname(public_path())
                . '/uploads/certificates';

            File::ensureDirectoryExists($uploadDirectory);

            $photo = $request->file('gemstone_photo');
            $filename = Str::uuid() . '.' . $photo->extension();

            $photo->move($uploadDirectory, $filename);

            $photoPath = 'uploads/certificates/' . $filename;
        }

        Diamond::create([
            'report_number' => $reportNumber,
            'public_id' => (string) Str::uuid(),

            'diamond_type' => $validated['diamond_type'],

            // The current diamond form has no separate identification field.
            'identification' => 'Diamond',
            'description' => $validated['description'],

            /* Original Jewellery Type save assignment retained:
             * 'jewellery_type' => $validated['jewellery_type'] ?? null,
             */
            'metal' => $validated['metal'] ?? null,

            'total_weight' => $validated['total_weight'] ?? null,
            'total_carat_weight' => $validated['total_carat_weight'],
            'center_diamond_weight' =>
                $validated['center_diamond_weight'] ?? null,

            'diamond_shape' => $validated['diamond_shape'],
            'color_grade' => $validated['color_grade'],
            'clarity_grade' => $validated['clarity_grade'],

            'cut_grade' => $validated['cut_grade'] ?? null,
            'measurements' => $validated['measurements'] ?? null,
            'polish' => $validated['polish'] ?? null,
            'symmetry' => $validated['symmetry'] ?? null,
            'fluorescence' => $validated['fluorescence'] ?? null,

            'comments' => $validated['diamond_comments'] ?? null,
            'diamond_photo' => $photoPath,
            'issue_date' => $validated['issue_date'] ?? null,
            'is_published' => $request->boolean('is_published'),
            'created_by' => $request->user()->id,
        ]);

        return redirect()
    ->route('admin.certificates.index', ['type' => 'diamond'])
    ->with('status', 'Diamond certificate created successfully.');
    }


    public function edit(Diamond $diamond)
    {
        return view('admin.certificates.create', [
            'editing' => true,
            'certificateType' => 'diamond',
            'diamond' => $diamond,
            'certificate' => null,
        ]);
    }

    public function update(Request $request, Diamond $diamond)
    {
        // The edit form may disable the certificate-type selector.
        $request->merge([
            'diamond_type' => $request->input(
                'diamond_type',
                $diamond->diamond_type
            ),
        ]);

        $validated = $request->validate([
            'diamond_type' => [
                'required',
                Rule::in(['studded', 'solitaire']),
            ],
            'description' => 'required|string|max:255',
            /* Original Jewellery Type validation retained:
             *             'jewellery_type' => [
             *                 Rule::requiredIf(
             *                     $request->input('diamond_type') === 'studded'
             *                 ),
             *                 'nullable',
             *                 'string',
             *                 'max:100',
             *             ],
             */
            'metal' => 'nullable|string|max:100',
            'total_weight' => [
                'nullable', 'numeric', 'min:0', 'max:9999999.999',
            ],
            'total_carat_weight' => [
                'required', 'numeric', 'gt:0', 'max:9999999.999',
            ],
            'center_diamond_weight' => [
                'nullable', 'numeric', 'min:0', 'max:9999999.999',
            ],
            'diamond_shape' => 'required|string|max:100',
            'color_grade' => 'required|string|max:50',
            'clarity_grade' => 'required|string|max:50',
            'cut_grade' => 'nullable|string|max:50',
            'measurements' => 'nullable|string|max:100',
            'polish' => 'nullable|string|max:50',
            'symmetry' => 'nullable|string|max:50',
            'fluorescence' => 'nullable|string|max:100',
            'diamond_comments' => 'nullable|string',
            'issue_date' => 'nullable|date',
            'is_published' => 'nullable|boolean',
            'gemstone_photo' => [
                'nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120',
            ],
        ]);

        $photoPath = $diamond->diamond_photo;

        if ($request->hasFile('gemstone_photo')) {
            $uploadDirectory = dirname(public_path())
                . '/uploads/certificates';

            File::ensureDirectoryExists($uploadDirectory);

            $photo = $request->file('gemstone_photo');
            $filename = Str::uuid() . '.' . $photo->extension();
            $photo->move($uploadDirectory, $filename);

            $photoPath = 'uploads/certificates/' . $filename;
        }

        $diamond->update([
            'diamond_type' => $validated['diamond_type'],
            'identification' => 'Diamond',
            'description' => $validated['description'],
            /* Original Jewellery Type save assignment retained:
             * 'jewellery_type' => $validated['jewellery_type'] ?? null,
             */
            'metal' => $validated['metal'] ?? null,
            'total_weight' => $validated['total_weight'] ?? null,
            'total_carat_weight' => $validated['total_carat_weight'],
            'center_diamond_weight' =>
                $validated['center_diamond_weight'] ?? null,
            'diamond_shape' => $validated['diamond_shape'],
            'color_grade' => $validated['color_grade'],
            'clarity_grade' => $validated['clarity_grade'],
            'cut_grade' => $validated['cut_grade'] ?? $diamond->cut_grade,
            'measurements' => $validated['measurements'] ?? $diamond->measurements,
            'polish' => $validated['polish'] ?? $diamond->polish,
            'symmetry' => $validated['symmetry'] ?? $diamond->symmetry,
            'fluorescence' => $validated['fluorescence'] ?? $diamond->fluorescence,
            'comments' => $validated['diamond_comments'] ?? $diamond->comments,
            'diamond_photo' => $photoPath,
            'issue_date' => $validated['issue_date'] ?? null,
            'is_published' => $request->boolean('is_published'),
        ]);

        return redirect()
            ->route('admin.certificates.index', ['type' => 'diamond'])
            ->with('status', 'Diamond certificate updated successfully.');
    }

    public function destroy(Diamond $diamond)
    {
        $diamond->delete();

        return redirect()
            ->route('admin.certificates.index', ['type' => 'diamond'])
            ->with('status', 'Diamond certificate moved to Trash.');
    }

    public function restore(string $id)
    {
        $diamond = Diamond::onlyTrashed()->findOrFail($id);
        $diamond->restore();

        return redirect()
            ->route('admin.certificates.index', [
                'type' => 'diamond',
                'trash' => 1,
            ])
            ->with('status', 'Diamond certificate restored successfully.');
    }

    public function printFront(Diamond $diamond)
    {
        return $this->renderDiamondPrintView($diamond, 'front');
    }

    public function printBack(Diamond $diamond)
    {
        return $this->renderDiamondPrintView($diamond, 'back');
    }

    private function renderDiamondPrintView(Diamond $diamond, string $side)
    {
        abort_unless(in_array($side, ['front', 'back'], true), 404);

        if ($side === 'back') {
            return response()
                ->view('admin.sections.back')
                ->header('Cache-Control', 'no-store, private');
        }

        return response()
            ->view('admin.diamonds.print.front', [
                'diamond' => $diamond,
                'photoUrl' => $this->diamondPhotoDataUri($diamond),
                'qrDataUri' => $this->diamondVerificationQrDataUri($diamond),
            ])
            ->header('Cache-Control', 'no-store, private');
    }

    private function diamondPhotoDataUri(Diamond $diamond): string
    {
        $fallback = 'data:image/svg+xml;base64,' . base64_encode(
            '<svg xmlns="http://www.w3.org/2000/svg" width="300" height="300">'
            . '<rect width="100%" height="100%" fill="#f7f5ef"/>'
            . '<text x="50%" y="50%" fill="#10284b" font-size="24" '
            . 'text-anchor="middle" dominant-baseline="middle">AGL DIAMOND</text>'
            . '</svg>'
        );

        if (! $diamond->diamond_photo) {
            return $fallback;
        }

        $baseDirectory = realpath(dirname(public_path()) . '/uploads/certificates');
        $candidate = dirname(public_path()) . '/' . $diamond->diamond_photo;
        $realFile = realpath($candidate);

        if (
            ! $baseDirectory
            || ! $realFile
            || ! str_starts_with($realFile, $baseDirectory . DIRECTORY_SEPARATOR)
            || ! is_file($realFile)
            || ! is_readable($realFile)
        ) {
            return $fallback;
        }

        $mime = File::mimeType($realFile);

        if (! in_array($mime, ['image/jpeg', 'image/png', 'image/webp'], true)) {
            return $fallback;
        }

        $contents = file_get_contents($realFile);

        if ($contents === false) {
            return $fallback;
        }

        return 'data:' . $mime . ';base64,' . base64_encode($contents);
    }

    private function diamondVerificationQrDataUri(Diamond $diamond): string
    {
        $url = url('/verify/diamond/' . $diamond->public_id);
        $temporaryFile = tempnam(sys_get_temp_dir(), 'agl-diamond-qr-');

        if ($temporaryFile === false) {
            abort(500, 'Unable to prepare the diamond verification QR code.');
        }

        try {
            $process = new Process([
                '/bin/qrencode',
                '-t', 'PNG',
                '-o', $temporaryFile,
                '-s', '6',
                '-m', '1',
                $url,
            ]);

            $process->setTimeout(10);
            $process->run();

            if (! $process->isSuccessful() || ! is_file($temporaryFile)) {
                abort(500, 'Unable to generate the diamond verification QR code.');
            }

            $png = file_get_contents($temporaryFile);

            if ($png === false) {
                abort(500, 'Unable to read the diamond verification QR code.');
            }

            return 'data:image/png;base64,' . base64_encode($png);
        } finally {
            if (is_file($temporaryFile)) {
                @unlink($temporaryFile);
            }
        }
    }


    public function verify(string $publicId)
    {
        $diamond = Diamond::where('public_id', $publicId)
            ->where('is_published', true)
            ->firstOrFail();

        $photoUrl = $diamond->diamond_photo
            ? $this->diamondPhotoDataUri($diamond)
            : null;

        return response()
            ->view('verify.diamond', compact('diamond', 'photoUrl'))
            ->header('Cache-Control', 'no-store, private');
    }

}
