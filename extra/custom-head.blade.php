{{-- 


|--------------------------------------------------------------------------
| Custom assets
|--------------------------------------------------------------------------

Custom assets are stored in the 'custom-assets' directory found inside the 'extra' folder.
Custom assets can be any file you would like to use in your theme.
For example: JS, CSS or image files.

You can load these custom assets with a built-in function, 'themeAsset()'.
Add the file you want to add to your 'custom-assets' folder, and include the name with the file extension in the function.

Down below, you can find a few examples using this function:



--}}

<style>
@font-face {
  font-family: "neon-tubes-2-regular";
  src:
    url('{{themeAsset('NeonTubes2.otf')}}'),
    url('{{themeAsset('NeonTubes2.ttf')}}'),
    url('{{themeAsset('NeonTubes2.woff')}}')
  ;
}

/* devanagari */
@font-face {
  font-family: 'Teko';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url('{{themeAsset('Teko.woff2')}}');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
}
/* latin-ext */
@font-face {
  font-family: 'Teko';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url('{{themeAsset('Teko.woff2')}}');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Teko';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url('{{themeAsset('Teko.woff2')}}');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

html {
  block-size: 100%;
  inline-size: 100%;
}

body {
  color: rgb(0, 0, 0);
  background: radial-gradient(ellipse at bottom, #4A587B 0%, #030308 100%);
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: 400% 400%;
  background-repeat: no-repeat;
  position: absolute;
  width: 100%;
  height: 100%;
}

  body {
    min-block-size: 100%;
    min-inline-size: 100%;
    font-weight: 700;
    margin: 0;
    box-sizing: border-box;
    display: grid;
    font-family: 'Teko', sans-serif;
    letter-spacing: 0.1em;
  }
</style>