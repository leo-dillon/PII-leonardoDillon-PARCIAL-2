<div class="container py-4 row mx-auto">
    <h1>Contacto</h1>
    <form class="row g-3 needs-validation" @submit.prevent="validarYEnviarFormulario">
        <div class="col-md-6">
            <label for="name" class="form-label">Nombre <span>*</span></label>
            <input
                type="text"
                name="nombre"
                class="form-control border-primary"
                id="name"
            />
        </div>
        <div class="col-md-6">
            <label for="lastname" class="form-label">Apellido <span>*</span></label>
            <input
                type="text"
                name="apellido"
                class="form-control border-primary"
                id="lastname"
            />
        </div>
        <div class="col-md-5">
            <label for="phone_number" class="form-label">Teléfono <span>*</span></label>
            <input
                type="tel"
                name="telefono"
                class="form-control border-primary"
                id="phone_number"
                minlength="8"
                maxlength="13"
            />
        </div>
        <div class="col-md-7">
            <label for="email" class="form-label">Email <span>*</span></label>
            <input
                type="email"
                name="email"
                class="form-control border-primary"
                id="email"
                placeholder="name@example.com"
            />
        </div>
        <div class="col-md-6">
            <label for="asunt" class="form-label">Asunto</label>
            <input
                type="text"
                name="asunto"
                class="form-control border-primary"
                id="asunt"
                placeholder="Asunto"
            />
        </div>
        <div class="col-md-12">
            <label for="comentario" class="form-label">Comentario <span>*</span></label>
            <textarea
                name="comentario"
                class="form-control border-primary"
                id="comentario"
                placeholder="Escriba un comentario..."
                rows="3"
            ></textarea>
        </div>
        <div class="col-12">
            <div class="form-check">
                <input
                class="form-check-input"
                type="checkbox"
                name="terminos_y_condiciones"
                id="validCheck"
                />
                <label class="form-check-label" for="validCheck">
                Acepto los términos y condiciones
                </label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn btn-outline-dark" type="submit">Enviar</button>
        </div>
    </form>
</div>
<style scoped>
    form{
        padding: 24px;
        border: 1px solid grey;
        border-radius: 6px;
    }
    form input{
        border: 1px solid grey;
        
    }
    form{
        box-shadow: 0 0 12px grey;
    }
</style>