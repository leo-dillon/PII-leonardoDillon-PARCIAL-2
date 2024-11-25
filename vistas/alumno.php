<section class="alumno py-5 bg-light col-12">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 text-center text-md-start info">
                <h1 class="display-4 fw-bold mb-3">Datos del Alumno:</h1>
                <h2 class="fw-bold text">Leonardo Nahuel Dillon Jeannoteguy</h2>
                <p class="lead"><strong>Correo:</strong> jeannotegui@gmail.com</p>
                <p class="lead"><strong>Edad:</strong> 25 años</p>
                <div class="redes d-flex justify-content-center justify-content-md-start gap-3 mt-4">
                    <a href="https://wa.link/d8mro6" target="_blank" class="social-link">
                        <img src="./imagenes/whatsapp.png" alt="Escribe a mi whatsapp" title="Escribe a mi whatsapp" class="img-fluid social-icon">
                    </a>
                    <a href="https://github.com/leo-dillon" target="_blank" class="social-link">
                        <img src="./imagenes/github.png" alt="Ir a mi Github" title="Ir a mi Github" class="img-fluid social-icon">
                    </a>
                    <a href="https://www.linkedin.com/in/leonardo-nahuel-dillon-jeannoteguy-1878b515a/" target="_blank" class="social-link">
                        <img src="./imagenes/linkedin.png" alt="Escribe a mi linkedin" title="Escribe a mi linkedin" class="img-fluid social-icon">
                    </a>
                    <a href="https://www.instagram.com/leonardonahueldillon/" target="_blank" class="social-link">
                        <img src="./imagenes/instagram.png" alt="Escribe a mi Instagram" title="Escribe a mi Instagram" class="img-fluid social-icon">
                    </a>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <picture>
                    <img src="./imagenes/leo.png" alt="Foto de Leonardo Dillon" class="img-fluid rounded-circle" style="max-width: 300px;">
                </picture>
            </div>
        </div>
    </div>
</section>
<style scoped>
    section{
        height: 70vh !important; 
        display: flex;
        align-items: center;
    }
    .alumno {
        height: 100%;
        background: linear-gradient(135deg, #0056b3, #520da8);
        color: #fff;
        padding: 60px 0;
        position: relative;
        overflow: hidden;
    }
    .alumno h1, .alumno h2, .alumno p {
        color: #fff;
    }

    .alumno .redes a {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .alumno .redes a:hover {
        transform: scale(1.1);
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
    }

    .social-link img {
        width: 50px;
        background-color: aliceblue;
        transition: transform 0.3s ease;
    }

    .social-link:hover img {
        transform: rotate(360deg);
    }

    .alumno img {
        border-radius: 50%;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .alumno img:hover {
        transform: scale(1.05);
        box-shadow: 0px 10px 25px rgb(0, 0, 0);
    }

    .alumno::before {
        content: "";
        position: absolute;
        top: -50px;
        right: -50px;
        width: 200px;
        height: 200px;
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        z-index: 1;
        animation: bubble 10s infinite;
    }

    .alumno::after {
        content: "";
        position: absolute;
        bottom: -50px;
        left: -50px;
        width: 300px;
        height: 300px;
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        z-index: 1;
        animation: bubble 12s infinite;
    }
    
    @keyframes bubble {
        0% {
            transform: scale(1) translateY(0);
        }
        50% {
            transform: scale(1.2) translateY(-20px);
        }
        100% {
            transform: scale(1) translateY(0);
        }
    }
</style>