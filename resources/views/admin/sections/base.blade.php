{{--
    SECTION 1 - CARD BASE
    White card background, gold outer frame and the faded ACL watermark.
    Sits at the very back; every other section is drawn on top of it.
    Image: public/assets/card/watermark.png
--}}
<style>
.agl-base {
    position: absolute;
    inset: 0;
    z-index: 0;
    overflow: hidden;
    /* gold frame colour (visible on the left, right and bottom edges) */
    background: linear-gradient(180deg, #d9b45c 0%, #c4933a 45%, #d2a64e 100%);
}

/* the paper: leaves a 10px gold frame left/right and 13px at the bottom */
.agl-base__paper {
    position: absolute;
    left: 10px;
    right: 10px;
    top: 0;
    bottom: 13px;
    background: linear-gradient(135deg, #f9f9f7 0%, #f5f5f3 55%, #f2f2f0 100%);
}

/* faded ACL monogram behind the fields */
.agl-base__watermark {
    position: absolute;
    left: 506px;
    top: 367px;
    width: 306px;
    height: 300px;
    pointer-events: none;
}
</style>

<div class="agl-base">
    <div class="agl-base__paper"></div>
    <img class="agl-base__watermark"
         src="{{ asset('assets/card/watermark.png') }}"
         alt="">
</div>
