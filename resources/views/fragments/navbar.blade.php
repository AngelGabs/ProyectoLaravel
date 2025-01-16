<style>
    header{
        background-color: rgba(48, 189, 232, 0.8);
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
        color: whitesmoke;
        text-decoration: none;
        padding-block: 10px;
        padding-inline: 10px;
        margin-inline: -4px;
    }
    nav p a:hover{
        background: grey;
        padding-block: 20px;
        padding-inline: 10px;
    }
</style>
<header>
    <nav>
        <p>
            <a href="{{route('index')}}">Inicio</a>
            <a href="{{route('citas.index')}}">Citas</a>
            <a href="{{route('medicos.index')}}">Medicos</a>
            <a href="{{route('pacientes.index')}}">Pacientes</a>
        </p>
    </nav>
</header>