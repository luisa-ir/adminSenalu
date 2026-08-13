@extends('layouts.app')

@section('content')

<div class="contact-page">

    <!-- ENCABEZADO -->
    <section class="contact-hero">

        <div class="hero-content">

            <div class="hero-icon">
                <i class="bi bi-headset"></i>
            </div>

            <h1>Contáctanos</h1>

            <p>
                Estamos aquí para ayudarte y brindarte la información
                que necesitas sobre AdminSena.
            </p>

        </div>

    </section>


    <!-- INFORMACIÓN DE CONTACTO -->
    <section class="contact-info">

        <div class="section-title">

            <span>ADMIN SENA</span>

            <h2>Estamos para ayudarte</h2>

            <p>
                Encuentra nuestros principales canales de atención.
            </p>

        </div>


        <div class="contact-grid">

            <!-- DIRECCIÓN -->
            <div class="contact-card">

                <div class="contact-icon green">
                    <i class="bi bi-geo-alt-fill"></i>
                </div>

                <div>
                    <h3>Dirección</h3>

                    <p>
                        Calle 57 No. 8-69<br>
                        Bogotá D.C., Colombia
                    </p>
                </div>

            </div>


            <!-- TELÉFONO -->
            <div class="contact-card">

                <div class="contact-icon blue">
                    <i class="bi bi-telephone-fill"></i>
                </div>

                <div>
                    <h3>Teléfono</h3>

                    <p>
                        Bogotá: (601) 736 6060<br>
                        Línea nacional: 018000 910270
                    </p>
                </div>

            </div>


            <!-- WHATSAPP -->
            <div class="contact-card">

                <div class="contact-icon whatsapp">
                    <i class="bi bi-whatsapp"></i>
                </div>

                <div>
                    <h3>WhatsApp</h3>

                    <p>
                        311 254 5028
                    </p>

                    <a href="https://wa.me/573112545028"
                       target="_blank">
                        Escribir por WhatsApp
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

            </div>


            <!-- HORARIOS -->
            <div class="contact-card">

                <div class="contact-icon purple">
                    <i class="bi bi-clock-fill"></i>
                </div>

                <div>
                    <h3>Horario de atención</h3>

                    <p>
                        Lunes a viernes<br>
                        7:00 a. m. - 7:00 p. m.
                    </p>

                    <p>
                        Sábados<br>
                        8:00 a. m. - 1:00 p. m.
                    </p>
                </div>

            </div>


            <!-- CORREO -->
            <div class="contact-card">

                <div class="contact-icon orange">
                    <i class="bi bi-envelope-fill"></i>
                </div>

                <div>
                    <h3>Correo electrónico</h3>

                    <p>
                        servicioalciudadano@sena.edu.co
                    </p>

                    <a href="mailto:servicioalciudadano@sena.edu.co">
                        Enviar correo
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

            </div>


            <!-- REDES -->
            <div class="contact-card">

                <div class="contact-icon red">
                    <i class="bi bi-share-fill"></i>
                </div>

                <div>

                    <h3>Redes sociales</h3>

                    <div class="social-links">

                        <a href="#" title="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>

                        <a href="#" title="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>

                        <a href="#" title="YouTube">
                            <i class="bi bi-youtube"></i>
                        </a>

                        <a href="#" title="TikTok">
                            <i class="bi bi-tiktok"></i>
                        </a>

                        <a href="#" title="X">
                            <i class="bi bi-twitter-x"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- FORMULARIO -->
    <section class="message-section">

        <div class="message-container">


            <!-- TEXTO -->
            <div class="message-info">

                <span class="small-title">
                    ¿NECESITAS AYUDA?
                </span>

                <h2>
                    Envíanos un mensaje
                </h2>

                <p>
                    Si tienes alguna pregunta, inquietud o necesitas
                    información adicional, puedes comunicarte con nosotros
                    mediante este formulario.
                </p>


                <div class="message-feature">

                    <i class="bi bi-check-circle-fill"></i>

                    <span>
                        Atención y orientación al usuario
                    </span>

                </div>


                <div class="message-feature">

                    <i class="bi bi-check-circle-fill"></i>

                    <span>
                        Información sobre programas de formación
                    </span>

                </div>


                <div class="message-feature">

                    <i class="bi bi-check-circle-fill"></i>

                    <span>
                        Soporte para el sistema académico
                    </span>

                </div>

            </div>


            <!-- FORMULARIO -->
            <div class="contact-form">

                <form>

                    <div class="form-row">

                        <div class="form-group">

                            <label>
                                Nombre
                            </label>

                            <div class="input-box">

                                <i class="bi bi-person-fill"></i>

                                <input
                                    type="text"
                                    placeholder="Ingresa tu nombre"
                                >

                            </div>

                        </div>


                        <div class="form-group">

                            <label>
                                Correo electrónico
                            </label>

                            <div class="input-box">

                                <i class="bi bi-envelope-fill"></i>

                                <input
                                    type="email"
                                    placeholder="correo@ejemplo.com"
                                >

                            </div>

                        </div>

                    </div>


                    <div class="form-group">

                        <label>
                            Asunto
                        </label>

                        <div class="input-box">

                            <i class="bi bi-chat-left-text-fill"></i>

                            <input
                                type="text"
                                placeholder="¿En qué podemos ayudarte?"
                            >

                        </div>

                    </div>


                    <div class="form-group">

                        <label>
                            Mensaje
                        </label>

                        <textarea
                            rows="5"
                            placeholder="Escribe tu mensaje aquí..."
                        ></textarea>

                    </div>


                    <button type="submit" class="send-button">

                        Enviar mensaje

                        <i class="bi bi-send-fill"></i>

                    </button>

                </form>

            </div>

        </div>

    </section>


</div>


<style>

/* ================================
   PÁGINA
================================ */

.contact-page{

    background:#f7faf9;

    color:#1f2937;

}


/* ================================
   HERO
================================ */

.contact-hero{

    min-height:300px;

    display:flex;

    align-items:center;

    justify-content:center;

    text-align:center;

    padding:60px 20px;

    background:
        linear-gradient(
            135deg,
            #087f35 0%,
            #1ed14b 40%,
            #1261a0 100%
        );

    position:relative;

    overflow:hidden;

}


/* círculos decorativos */

.contact-hero::before{

    content:"";

    position:absolute;

    width:350px;

    height:350px;

    border-radius:50%;

    background:rgba(255,255,255,.10);

    top:-180px;

    left:-100px;

}


.contact-hero::after{

    content:"";

    position:absolute;

    width:400px;

    height:400px;

    border-radius:50%;

    background:rgba(255,255,255,.08);

    bottom:-250px;

    right:-100px;

}


.hero-content{

    position:relative;

    z-index:2;

    max-width:700px;

}


.hero-icon{

    width:70px;

    height:70px;

    margin:auto;

    display:flex;

    align-items:center;

    justify-content:center;

    border-radius:20px;

    background:rgba(255,255,255,.18);

    backdrop-filter:blur(10px);

    font-size:32px;

    color:white;

}


.hero-content h1{

    color:white;

    font-size:48px;

    font-weight:800;

    margin:18px 0 10px;

}


.hero-content p{

    color:rgba(255,255,255,.9);

    font-size:18px;

    line-height:1.6;

    margin:0;

}


/* ================================
   INFORMACIÓN
================================ */

.contact-info{

    max-width:1100px;

    margin:auto;

    padding:70px 25px;

}


.section-title{

    text-align:center;

    margin-bottom:45px;

}


.section-title span,
.small-title{

    color:#087f35;

    font-weight:800;

    font-size:13px;

    letter-spacing:2px;

}


.section-title h2{

    font-size:34px;

    font-weight:800;

    margin:10px 0;

}


.section-title p{

    color:#6b7280;

}


/* GRID */

.contact-grid{

    display:grid;

    grid-template-columns:repeat(3,1fr);

    gap:22px;

}


/* CARD */

.contact-card{

    background:white;

    padding:25px;

    border-radius:18px;

    display:flex;

    gap:18px;

    align-items:flex-start;

    box-shadow:
        0 8px 25px rgba(0,0,0,.07);

    border:1px solid #eef2f1;

    transition:.3s;

}


.contact-card:hover{

    transform:translateY(-6px);

    box-shadow:
        0 15px 35px rgba(0,0,0,.12);

}


.contact-card h3{

    margin:0 0 8px;

    font-size:18px;

    font-weight:700;

}


.contact-card p{

    margin:0 0 8px;

    color:#6b7280;

    line-height:1.6;

    font-size:14px;

}


.contact-card a{

    text-decoration:none;

    color:#087f35;

    font-weight:600;

    font-size:13px;

}


/* ICONOS */

.contact-icon{

    min-width:52px;

    height:52px;

    border-radius:15px;

    display:flex;

    align-items:center;

    justify-content:center;

    font-size:22px;

}


.green{

    background:#e7f9ed;

    color:#087f35;

}


.blue{

    background:#e8f1ff;

    color:#1261a0;

}


.whatsapp{

    background:#e6f9ee;

    color:#16a34a;

}


.purple{

    background:#f0eaff;

    color:#7c3aed;

}


.orange{

    background:#fff4df;

    color:#f59e0b;

}


.red{

    background:#ffe8eb;

    color:#e11d48;

}


/* REDES */

.social-links{

    display:flex;

    gap:9px;

    margin-top:12px;

}


.social-links a{

    width:34px;

    height:34px;

    border-radius:9px;

    display:flex;

    align-items:center;

    justify-content:center;

    background:#f3f4f6;

    color:#374151;

    transition:.3s;

}


.social-links a:hover{

    background:#087f35;

    color:white;

    transform:translateY(-3px);

}


/* ================================
   FORMULARIO
================================ */

.message-section{

    padding:80px 25px;

    background:
        linear-gradient(
            135deg,
            #eefaf2,
            #eef6ff
        );

}


.message-container{

    max-width:1100px;

    margin:auto;

    display:grid;

    grid-template-columns:1fr 1.2fr;

    gap:50px;

    align-items:center;

}


/* TEXTO */

.message-info h2{

    font-size:38px;

    font-weight:800;

    margin:10px 0 18px;

}


.message-info p{

    color:#6b7280;

    line-height:1.8;

}


.message-feature{

    display:flex;

    gap:12px;

    align-items:center;

    margin-top:18px;

    font-size:14px;

    font-weight:600;

}


.message-feature i{

    color:#1ed14b;

    font-size:18px;

}


/* FORM */

.contact-form{

    background:white;

    padding:35px;

    border-radius:22px;

    box-shadow:
        0 15px 40px rgba(0,0,0,.08);

}


.form-row{

    display:grid;

    grid-template-columns:1fr 1fr;

    gap:18px;

}


.form-group{

    margin-bottom:20px;

}


.form-group label{

    display:block;

    margin-bottom:8px;

    font-size:14px;

    font-weight:700;

}


.input-box{

    position:relative;

}


.input-box i{

    position:absolute;

    left:15px;

    top:50%;

    transform:translateY(-50%);

    color:#087f35;

}


.input-box input{

    width:100%;

    padding:13px 15px 13px 43px;

    border:1px solid #e5e7eb;

    border-radius:10px;

    outline:none;

    transition:.3s;

}


.input-box input:focus{

    border-color:#1ed14b;

    box-shadow:
        0 0 0 3px rgba(30,209,75,.12);

}


.form-group textarea{

    width:100%;

    padding:14px;

    border:1px solid #e5e7eb;

    border-radius:10px;

    resize:none;

    outline:none;

    font-family:inherit;

}


.form-group textarea:focus{

    border-color:#1ed14b;

    box-shadow:
        0 0 0 3px rgba(30,209,75,.12);

}


/* BOTÓN */

.send-button{

    width:100%;

    border:none;

    padding:14px 20px;

    border-radius:11px;

    color:white;

    font-weight:700;

    font-size:15px;

    cursor:pointer;

    background:
        linear-gradient(
            90deg,
            #087f35,
            #1ed14b,
            #1261a0
        );

    transition:.3s;

}


.send-button:hover{

    transform:translateY(-2px);

    box-shadow:
        0 8px 20px rgba(8,127,53,.25);

}


.send-button i{

    margin-left:8px;

}


/* ================================
   FINAL
================================ */

.contact-final{

    padding:45px 20px;

    text-align:center;

    background:
        linear-gradient(
            135deg,
            #087f35,
            #1261a0
        );

    color:white;

}


.contact-final i{

    font-size:30px;

}


.contact-final h2{

    margin:8px 0 3px;

    font-weight:800;

}


.contact-final p{

    margin:0;

    opacity:.85;

}


/* ================================
   RESPONSIVE
================================ */

@media(max-width:900px){

    .contact-grid{

        grid-template-columns:repeat(2,1fr);

    }

    .message-container{

        grid-template-columns:1fr;

    }

}


@media(max-width:600px){

    .contact-grid{

        grid-template-columns:1fr;

    }

    .form-row{

        grid-template-columns:1fr;

    }

    .hero-content h1{

        font-size:36px;

    }

    .message-info h2{

        font-size:30px;

    }

}

</style>

@endsection
