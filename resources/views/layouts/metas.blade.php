<meta name="title" content="{{ $tour->nombre }}"/>
<meta name="keywords" content="{{ $tour->keywords}}"/>
<meta rel="canonical" content="{{ request()->fullUrl() }}">

<meta name="og_image" content="{{ asset('img/buscador/' . $tour->img)  }}"/>
<meta name="og_secureImage" content="{{ asset('img/buscador/' . $tour->img)  }}"/>

<meta property="og:title" content="{{ $tour->nombre }}"/>
<meta property="og:description" content="{{ $tour->descripcion}}"/>
<meta property="og:locale" content="es" />
<meta property="og:url" content="{{ request()->fullUrl() }}"/>
<meta name="twitter:card" content="summary"/>
<meta name="robots" content="index,follow" />