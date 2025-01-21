<style>
    header{
        background-color: rgba(255, 255, 255, 0.8);
        padding-block: 20px;
        margin-block: -8px;
        margin-inline: -8px;
        position: sticky;
    }
    nav p{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 25px;
        padding-inline: 20px;
    }
    nav p a{
        color: rgb(13, 12, 12);
        text-decoration: none;
        padding-block: 10px;
        padding-inline: 10px;
        margin-inline: -4px;
    }
    nav p a:hover{
        background: rgb(42, 124, 206);
        padding-block: 20px;
        padding-inline: 10px;
    }
</style>
<header>
    <nav>
        <p>
            <img src="https://www.clipartmax.com/png/middle/219-2192481_greater-new-york-hospital-association-medical-symbol.png"
             alt="Mi Imagen Externa" style="width: 65px; height: 60px;">
             <a> </a>
             <a> </a>
            <a href="{{route('index')}}">Inicio</a>
        
            <a href="{{route('medicos.index')}}">Medicos</a>
            <a href="{{route('pacientes.index')}}">Pacientes</a>
            <a href="{{route('areas.index') }}">Areas</a>
            <a href="{{route('citas.index')}}">Citas</a>
        </p>
    </nav>
</header>

<body>
    <div style="text-align: center; padding: 20px;">
        
        <h1>Hospital Civil</h1>

    
        <p> Sistema de Gestión de Registros </p>

        <style>
            body {
                font-family: 'Roboto', sans-serif;
            }
            h1 {
                font-weight: 700; 
            }
            p {
                font-weight: 400;
            }
        </style>

       
       
        {{-- Imagen desde URL externa --}}
       
    </div>
</body>