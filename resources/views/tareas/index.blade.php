<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/1ffa009b6c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/tareas.css">
    <title>Tareas</title>
</head>
<body>  
    <section id="tarea-nueva">
        <h4>Agregar Tarea</h4>
        <form action="{{ route('tareas.store') }}" method="post">
            @csrf
            <div class="datos-form">
                <div class="">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" placeholder="Nombre de la terea">
                </div>
                <div class="description">
                    <label for="description">Descripción</label>
                    <textarea name="description" id="description" cols="30" rows="10" placeholder="Descripción"></textarea>
                </div>
            </div>
            <div class="btn-agregar">
                <button type="submit" class="btn-agregar-tarea">Agregar</button>
                
            </div>
        </form>
    </section> 

    <section id="tareas">
        <h4 class="titulo">TAREAS</h4>
            <div class="contenido-tareas">
                @foreach ($tareas as $tarea)
                <div class="name">
                    <h4>{{$tarea->name}}</h4>
                    <form action="{{ route('tareas.destroy',$tarea->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit"><i class="fa-solid fa-circle-xmark"></i></button>
                    </form>
                </div>
                <div class="description">
                    <p>{{$tarea->description}}</p>
                </div>
                @endforeach
            </div>
    </section> <br>
</body>
</html>