<!-- Footer -->
<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>My Portfolio</h5>
                <p>A showcase of my professional journey and skills.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <h5>Connect With Me</h5>
                <div class="social-links">
                    <a href="#" class="text-white me-2"><i class="fab fa-linkedin fa-lg"></i></a>
                    <a href="#" class="text-white me-2"><i class="fab fa-github fa-lg"></i></a>
                    <a href="#" class="text-white me-2"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
            </div>
        </div>
        <hr>
        <div class="text-center">
            <p>&copy; <?php echo date('Y'); ?> My Portfolio. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<!-- JavaScript -->
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JavaScript -->
<script src="assets/js/script.js"></script>

<!-- Admin Scripts -->
<?php if(isset($_SESSION['is_admin']) && $_SESSION['is_admin']): ?>
<script src="assets/js/admin.js"></script>
<?php endif; ?>

</body>
</html>