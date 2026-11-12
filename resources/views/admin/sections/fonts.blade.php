{{--
    FONTS - shared @font-face declarations for the certificate card.
    Files live in public/assets/fonts/ (bundled locally so PDF / print output
    never depends on the internet).

    Roles:
      Cormorant Garamond 700 : "GEMSTONE CERTIFICATE" title, identification result, "Gemologist"
      Montserrat 500         : subtitle ("IDENTIFICATION & AUTHENTICITY REPORT")
      Open Sans 700 / 600    : field labels, "SCAN FOR REPORT VERIFICATION"
      EB Garamond 500-700    : field values, captions, strip labels, bottom-bar text
      EB Garamond italic 500 : top-bar motto
      Allura 400             : "Real Gemstones. Real Value." signature line
--}}
<style>
@font-face { font-family: 'Cormorant Garamond'; font-style: normal; font-weight: 700; font-display: block;
    src: url('{{ asset('assets/fonts/cormorant-garamond-latin-700-normal.woff2') }}') format('woff2'); }

@font-face { font-family: 'Montserrat'; font-style: normal; font-weight: 500; font-display: block;
    src: url('{{ asset('assets/fonts/montserrat-latin-500-normal.woff2') }}') format('woff2'); }

@font-face { font-family: 'Open Sans'; font-style: normal; font-weight: 600; font-display: block;
    src: url('{{ asset('assets/fonts/open-sans-latin-600-normal.woff2') }}') format('woff2'); }
@font-face { font-family: 'Open Sans'; font-style: normal; font-weight: 700; font-display: block;
    src: url('{{ asset('assets/fonts/open-sans-latin-700-normal.woff2') }}') format('woff2'); }

@font-face { font-family: 'EB Garamond'; font-style: normal; font-weight: 500; font-display: block;
    src: url('{{ asset('assets/fonts/eb-garamond-latin-500-normal.woff2') }}') format('woff2'); }
@font-face { font-family: 'EB Garamond'; font-style: normal; font-weight: 600; font-display: block;
    src: url('{{ asset('assets/fonts/eb-garamond-latin-600-normal.woff2') }}') format('woff2'); }
@font-face { font-family: 'EB Garamond'; font-style: normal; font-weight: 700; font-display: block;
    src: url('{{ asset('assets/fonts/eb-garamond-latin-700-normal.woff2') }}') format('woff2'); }
@font-face { font-family: 'EB Garamond'; font-style: italic; font-weight: 500; font-display: block;
    src: url('{{ asset('assets/fonts/eb-garamond-latin-500-italic.woff2') }}') format('woff2'); }

@font-face { font-family: 'Allura'; font-style: normal; font-weight: 400; font-display: block;
    src: url('{{ asset('assets/fonts/allura-latin-400-normal.woff2') }}') format('woff2'); }
</style>
