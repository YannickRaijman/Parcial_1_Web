<x-layout title="Inicio">
    <div class="row align-items-center py-5">
        <div class="col-md-6">
            <h1 class="display-4 fw-bold">Soluciones Tecnológicas a tu Medida</h1>
            <p class="lead">Especialistas en soporte técnico preventivo, reparación de equipos y desarrollo de interfaces modernas para tu negocio.</p>
            <div class="mt-4">
                <a href="{{ route('services.index') }}" class="btn btn-primary btn-lg">Ver Servicios</a>
            </div>
        </div>
        <div class="col-md-6 text-center">
            <img src="{{ url('img/home.jpg') }}" alt="Servicio Técnico de Computadoras" class="img-fluid rounded shadow-lg">
        </div>
    </div>

    <section class="mt-5 border-top pt-5">
        <h2 class="text-center mb-4">¿Por qué elegirnos?</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <h3>Experiencia</h3>
                <p>Más de 15 años brindando soporte técnico en empresas líderes.</p>
            </div>
            <div class="col-md-4">
                <h3>Calidad</h3>
                <p>Uso de herramientas y componentes de primera línea.</p>
            </div>
            <div class="col-md-4">
                <h3>Confianza</h3>
                <p>Atención personalizada y presupuestos transparentes.</p>
            </div>
        </div>
    </section>
</x-layout>