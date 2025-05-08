<?php
$pageTitle = "About Me | My Portfolio";
include 'header.php';

// You can connect to a database here to retrieve your about information
// For now, we'll use static information

// Define the is_admin function if it doesn't exist elsewhere
if (!function_exists('is_admin')) {
    function is_admin() {
        // Simple implementation - should be replaced with your actual authentication logic
        return isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin';
    }
}

// Ensure we have a session started for the is_admin function to work
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <div class="text-center p-3">
                    <div class="avatar-container">
                        <?php if (file_exists('assets/images/avatar.jpg')): ?>
                            <img src="assets/images/avatar.jpg" alt="Profile Avatar" class="img-fluid rounded-circle avatar-img">
                        <?php else: ?>
                            <div class="avatar-placeholder">
                                <i class="fas fa-user fa-5x"></i>
                                <p class="text-muted mt-2">Upload your avatar</p>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <?php if (is_admin()): ?>
                    <form action="upload_avatar.php" method="post" enctype="multipart/form-data" class="mt-3">
                        <div class="mb-3">
                            <label for="avatar" class="form-label">Upload Profile Picture</label>
                            <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                    <?php endif; ?>
                </div>
                
                <div class="card-body">
                    <h5 class="card-title">Contact Information</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fas fa-envelope me-2"></i> email@example.com</li>
                        <li class="list-group-item"><i class="fas fa-phone me-2"></i> (123) 456-7890</li>
                        <li class="list-group-item"><i class="fas fa-map-marker-alt me-2"></i> City, Country</li>
                    </ul>
                </div>
                
                <div class="card-footer">
                    <div class="social-links text-center">
                        <a href="#" class="btn btn-outline-primary btn-sm me-1"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="btn btn-outline-dark btn-sm me-1"><i class="fab fa-github"></i></a>
                        <a href="#" class="btn btn-outline-info btn-sm me-1"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-outline-danger btn-sm"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-8">
            <h1 class="display-4 mb-4">About Me</h1>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <h5 class="card-title">Professional Summary</h5>
                    <p class="card-text">
                        I am a passionate professional with expertise in various technologies and a strong background in 
                        problem-solving and creative thinking. With a dedication to continuous learning, I strive to deliver 
                        high-quality solutions that meet client needs and exceed expectations.
                    </p>
                </div>
            </div>
            
            <div class="card shadow mb-4">
                <div class="card-body">
                    <h5 class="card-title">Education</h5>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-date">20XX - 20XX</div>
                            <div class="timeline-content">
                                <h6>Master's Degree</h6>
                                <p>University Name</p>
                                <p class="text-muted">Field of Study</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-date">20XX - 20XX</div>
                            <div class="timeline-content">
                                <h6>Bachelor's Degree</h6>
                                <p>University Name</p>
                                <p class="text-muted">Field of Study</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Work Experience</h5>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-date">20XX - Present</div>
                            <div class="timeline-content">
                                <h6>Current Position</h6>
                                <p>Company Name</p>
                                <ul>
                                    <li>Key responsibility or achievement</li>
                                    <li>Key responsibility or achievement</li>
                                    <li>Key responsibility or achievement</li>
                                </ul>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-date">20XX - 20XX</div>
                            <div class="timeline-content">
                                <h6>Previous Position</h6>
                                <p>Company Name</p>
                                <ul>
                                    <li>Key responsibility or achievement</li>
                                    <li>Key responsibility or achievement</li>
                                    <li>Key responsibility or achievement</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CSS for timeline styling -->
<style>
.timeline {
    position: relative;
    padding: 0;
    list-style: none;
}

.timeline-item {
    position: relative;
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #e9ecef;
}

.timeline-item:last-child {
    border-bottom: none;
}

.timeline-date {
    font-weight: bold;
    color: #6c757d;
    margin-bottom: 5px;
}

.timeline-content h6 {
    margin-bottom: 5px;
    color: #343a40;
}
</style>

<?php include 'footer.php'; ?>