{{--
    SECTION 4 - FEATURE STRIP
    Four icon columns below the fields: Diamond Testing, Colored Stone
    Identification, Advanced Analysis, Trusted Certification.
    Fully static (inline SVG icons, no images needed).
--}}
<style>
.agl-strip {
    --agl-navy: #10284b;
    --agl-gold: #b8862f;
    position: absolute;
    left: 28px;
    top: 770px;
    width: 723px;
    height: 100px;
    display: flex;
    z-index: 3;
}

.agl-strip__item {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.agl-strip__item:nth-child(1) { width: 163px; }
.agl-strip__item:nth-child(2) { width: 193px; }
.agl-strip__item:nth-child(3) { width: 183px; }
.agl-strip__item:nth-child(4) { width: 184px; }

/* gold separator between columns */
.agl-strip__item + .agl-strip__item::before {
    content: '';
    position: absolute;
    left: 0;
    top: 18px;
    width: 2px;
    height: 57px;
    background: linear-gradient(180deg, rgba(184,134,47,0.2), #c9983f 25%, #c9983f 75%, rgba(184,134,47,0.2));
}

.agl-strip__icon {
    height: 54px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.agl-strip__icon svg { display: block; height: 100%; width: auto; }

.agl-strip__label {
    margin-top: 3px;
    text-align: center;
    color: var(--agl-navy);
    font: 600 13.5px/18px 'EB Garamond', Georgia, serif;
    letter-spacing: 0.03em;
    white-space: nowrap;
}
                                
.agl-strip__seal {
    position: absolute;
    left: calc(100% - 5px);
    bottom: 0px;
    width: 175px;
    height: 175px;
    object-fit: contain;
}
</style>

<div class="agl-strip">

    <!-- Diamond Testing -->
    <div class="agl-strip__item">
        <div class="agl-strip__icon">
            <svg viewBox="0 0 60 54" xmlns="http://www.w3.org/2000/svg" style="height:40px">
                <g fill="none" stroke="#b8862f" stroke-width="2.4" stroke-linejoin="round" stroke-linecap="round">
                    <path d="M14 6 H46 L58 20 L30 50 L2 20 Z"/>
                    <path d="M2 20 H58"/>
                    <path d="M20 20 L30 6 L40 20"/>
                    <path d="M20 20 L30 50 L40 20"/>
                </g>
            </svg>
        </div>
        <div class="agl-strip__label">DIAMOND<br>TESTING</div>
    </div>

    <!-- Colored Stone Identification -->
    <div class="agl-strip__item">
        <div class="agl-strip__icon">
            <svg viewBox="0 0 40 56" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 2 C20 2 4 22 4 36 C4 46 11 54 20 54 C29 54 36 46 36 36 C36 22 20 2 20 2 Z" fill="#10284b"/>
                <g fill="none" stroke="#9db4dd" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" opacity="0.9">
                    <path d="M21 6 L15 21 L24 29 L19 47"/>
                    <path d="M15 21 L8 27"/>
                    <path d="M24 29 L32 25"/>
                    <path d="M19 38 L28 43"/>
                </g>
            </svg>
        </div>
        <div class="agl-strip__label">COLORED STONE<br>IDENTIFICATION</div>
    </div>

    <!-- Advanced Analysis -->
    <div class="agl-strip__item">
        <div class="agl-strip__icon">
            <svg viewBox="0 0 44 56" xmlns="http://www.w3.org/2000/svg">
                <g fill="#10284b">
                    <g transform="rotate(28 17 16)">
                        <rect x="12" y="2" width="9" height="26" rx="1.5"/>
                        <rect x="10" y="0" width="13" height="5" rx="1.5"/>
                    </g>
                    <rect x="9" y="30" width="6" height="8" rx="1"/>
                    <rect x="3" y="39" width="23" height="3.5" rx="1"/>
                    <rect x="3" y="49" width="38" height="5.5" rx="1.5"/>
                </g>
                <path d="M27 16 C41 20 41 42 29 49" fill="none" stroke="#10284b" stroke-width="5.5" stroke-linecap="round"/>
                <circle cx="24" cy="14" r="3" fill="#10284b"/>
            </svg>
        </div>
        <div class="agl-strip__label">ADVANCED<br>ANALYSIS</div>
    </div>

    <!-- Trusted Certification -->
    <div class="agl-strip__item">
        <div class="agl-strip__icon">
            <svg viewBox="0 0 44 52" xmlns="http://www.w3.org/2000/svg" style="height:47px">
                <path d="M22 3 L40 9 V24 C40 36 32 45 22 49 C12 45 4 36 4 24 V9 Z"
                      fill="none" stroke="#b8862f" stroke-width="2.4" stroke-linejoin="round"/>
                <path d="M14 25 L20 31 L31 19" fill="none" stroke="#b8862f" stroke-width="2.6"
                      stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <div class="agl-strip__label">TRUSTED<br>CERTIFICATION</div>
    </div>

 <!-- Seal -->
   
<img class="agl-strip__seal"
     src="{{ asset('assets/card/seal.png') }}"
     alt="AGL Seal">
</div>
