@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Disfruta Nuestra Biblioteca') }}
                    
                    <div class="card-body1">
                        {{ __('Lee Mucho, Disfruta') }}
                    </div>

                </div>
                
            </div>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Autores Destacados: Datos curiosos') }}</div>

                <div class="card-body">
                    <div class="author-card">
                        <h3 class="author-name">Franz Kafka</h3>
                        <p class="author-details">Este famoso autor checo es conocido por su novela "La metamorfosis". Un dato curioso sobre Kafka es que, durante su vida, apenas publicó algunas de sus obras. De hecho, ordenó a su amigo Max Brod quemar todos sus escritos después de su muerte, pero Brod decidió ignorar su petición y publicarlos, lo que llevó a la difusión de la obra de Kafka en todo el mundo.
</p>
                    </div>
                    <div class="author-card">
                        <h3 class="author-name">J.R.R. Tolkien</h3>
                        <p class="author-details">El creador de "El Señor de los Anillos" y "El Hobbit" fue un lingüista apasionado. Antes de escribir sus famosas novelas, Tolkien desarrolló numerosos idiomas ficticios, incluyendo el élfico y el khuzdul (la lengua de los enanos). Su amor por los idiomas fue fundamental en la creación de los mundos fantásticos de la Tierra Media.</p>
                    </div>
                    <div class="author-card">
                        <h3 class="author-name">Virginia Woolf</h3>
                        <p class="author-details">Una de las figuras más importantes de la literatura modernista, Virginia Woolf era conocida por su estilo experimental y su enfoque en la exploración de la psicología de los personajes. Un dato curioso sobre ella es que, para escribir, prefería estar de pie. Woolf creía que estar de pie le daba mayor claridad mental y fluidez en su escritura.
</p>
                    </div>
                    <div class="author-card">
                        <h3 class="author-name">Gabriel García Márquez</h3>
                        <p class="author-details">El autor colombiano es famoso por su realismo mágico y su novela "Cien años de soledad". Un dato curioso sobre él es que García Márquez solía llevar consigo una máquina de escribir a todas partes. Incluso cuando estaba en el extranjero, no se separaba de su máquina de escribir para poder trabajar en sus historias en cualquier momento.</p>
                    </div>
                    <div class="author-card">
                        <h3 class="author-name">Jane Austen</h3>
                        <p class="author-details">La aclamada autora británica del siglo XIX, conocida por novelas como "Orgullo y prejuicio" y "Emma", fue anónima durante gran parte de su vida. Sus obras se publicaron originalmente bajo el seudónimo de "Una dama" ("A Lady"). No fue hasta después de su muerte que se reveló que Jane Austen era la autora detrás de estas populares novelas.
</p>
                    </div>
                    <div class="author-card">
                        <h3 class="author-name">Ernest Hemingway</h3>
                        <p class="author-details">Este influyente escritor estadounidense era conocido por su estilo directo y conciso. Hemingway tenía una pasión por la aventura y participó en diversas actividades, como la pesca de grandes peces y las corridas de toros. De hecho, sobrevivió a múltiples accidentes de aviación y, en 1954, obtuvo el premio Nobel de Literatura.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
