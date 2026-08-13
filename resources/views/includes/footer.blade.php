<footer class="footer">

    <div class="container">

        <div class="footer-content">

            <div class="footer-brand">
                <i class="bi bi-mortarboard-fill"></i>

                <strong>AdminSena</strong>

                <span>Sistema de Gestión Académica</span>
            </div>

            <div class="footer-copy">
                © 2026 AdminSena | Todos los derechos reservados.
            </div>

        </div>

    </div>

</footer>

<style>

.footer {
    background: #128C35;
    color: #fff;
    padding: 13px 0;
    margin-top: 40px;
}

.footer-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.footer-brand {
    display: flex;
    align-items: center;
    gap: 10px;
}

.footer-brand i {
    font-size: 20px;
}

.footer-brand strong {
    font-size: 17px;
}

.footer-brand span {
    font-size: 13px;
    padding-left: 12px;
    border-left: 1px solid rgba(255,255,255,.5);
}

.footer-copy {
    font-size: 12px;
}

@media (max-width: 768px) {

    .footer-content {
        flex-direction: column;
        gap: 8px;
        text-align: center;
    }

    .footer-brand {
        justify-content: center;
    }

    .footer-brand span {
        border-left: none;
        padding-left: 0;
    }

}

</style>
