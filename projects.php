<?php
$pageTitle = "My Projects | My Portfolio";
include 'header.php';

// You can connect to a database here to retrieve your projects
// For now, we'll use static information
$projects = [
    [
        'title' => 'E-commerce Website',
        'description' => 'A fully functional e-commerce platform with product management, cart functionality, and payment processing.',
        'technologies' => ['PHP', 'MySQL', 'Bootstrap', 'JavaScript'],
        'image' => 'assets/images/projects/project1.jpg',
        'github' => '#',
        'demo' => '#',
        'featured' => true
    ],
    [
        'title' => 'Task Management App',
        'description' => 'A responsive web application for managing tasks with features like categorization, priorities, and team collaboration.',
        'technologies' => ['React', 'Node.js', 'MongoDB', 'Express'],
        'image' => 'assets/images/projects/project2.jpg', 
        'github' => '#',
        'demo' => '#',
        'featured' => true
    ],
    [
        'title' => 'Portfolio Website',
        'description' => 'A personal portfolio website showcasing skills, projects, and professional experience.',
        'technologies' => ['PHP', 'Bootstrap', 'JavaScript', 'MySQL'],
        'image' => 'assets/images/projects/project3.jpg',
        'github' => '#',
        'demo' => '#',
        'featured' => true
    ],
    [
        'title' => 'Weather Dashboard',
        'description' => 'A dashboard application that provides current weather and forecasts for multiple locations.',
        'technologies' => ['JavaScript', 'API Integration', 'CSS3', 'HTML5'],
        'image' => 'assets/images/projects/project4.jpg',
        'github' => '#',
        'demo' => '#',
        'featured' => false
    ],
    [
        'title' => 'Content Management System',
        'description' => 'A custom CMS with user roles, content editing, and publishing workflows.',
        'technologies' => ['PHP', 'Laravel', 'MySQL', 'Bootstrap'],
        'image' => 'assets/images/projects/project5.jpg',
        'github' => '#',
        'demo' => '#',
        'featured' => false
    ],
    [
        'title' => 'Mobile Banking App',
        'description' => 'A secure mobile banking application with transaction history, account management, and bill payments.',
        'technologies' => ['React Native', 'Firebase', 'Node.js'],
        'image' => 'assets/images/projects/project6.jpg',
        'github' => '#',
        'demo' => '#',
        'featured' => false
    ]
];
?>

<div class="container py-5">
    <h1 class="display-4 mb-4">My Projects</h1>
    
    <!-- Featured Projects -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="mb-4">Featured Projects</h2>
        </div>
        
        <?php 
        $featuredCount = 0;
        foreach ($projects as $project): 
            if ($project['featured']):
                $featuredCount++;
        ?>
        <div class="col-md-4 mb-4">
            <div class="card project-card shadow h-100">
                <div class="project-image-container">
                    <?php if (file_exists($project['image'])): ?>
                        <img src="<?php echo $project['image']; ?>" class="card-img-top project-image" alt="<?php echo $project['title']; ?>">
                    <?php else: ?>
                        <div class="project-image-placeholder">
                            <i class="fas fa-code fa-3x"></i>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $project['title']; ?></h5>
                    <p class="card-text"><?php echo $project['description']; ?></p>
                    <div class="technologies mb-3">
                        <?php foreach ($project['technologies'] as $tech): ?>
                            <span class="badge bg-primary me-1"><?php echo $tech; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <div class="d-flex justify-content-between">
                        <a href="<?php echo $project['github']; ?>" class="btn btn-outline-dark btn-sm" target="_blank">
                            <i class="fab fa-github me-1"></i> View Code
                        </a>
                        <a href="<?php echo $project['demo']; ?>" class="btn btn-primary btn-sm" target="_blank">
                            <i class="fas fa-external-link-alt me-1"></i> Live Demo
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            endif;
        endforeach; 
        
        if ($featuredCount == 0):
        ?>
        <div class="col-12">
            <div class="alert alert-info">
                No featured projects available at the moment.
            </div>
        </div>
        <?php endif; ?>
    </div>
    
    <!-- Other Projects -->
    <div class="row">
        <div class="col-12">
            <h2 class="mb-4">Other Projects</h2>
        </div>
        
        <?php 
        $otherCount = 0;
        foreach ($projects as $project): 
            if (!$project['featured']):
                $otherCount++;
        ?>
        <div class="col-md-4 mb-4">
            <div class="card project-card shadow h-100">
                <div class="project-image-container">
                    <?php if (file_exists($project['image'])): ?>
                        <img src="<?php echo $project['image']; ?>" class="card-img-top project-image" alt="<?php echo $project['title']; ?>">
                    <?php else: ?>
                        <div class="project-image-placeholder">
                            <i class="fas fa-code fa-3x"></i>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $project['title']; ?></h5>
                    <p class="card-text"><?php echo $project['description']; ?></p>
                    <div class="technologies mb-3">
                        <?php foreach ($project['technologies'] as $tech): ?>
                            <span class="badge bg-secondary me-1"><?php echo $tech; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <div class="d-flex justify-content-between">
                        <a href="<?php echo $project['github']; ?>" class="btn btn-outline-dark btn-sm" target="_blank">
                            <i class="fab fa-github me-1"></i> View Code
                        </a>
                        <a href="<?php echo $project['demo']; ?>" class="btn btn-primary btn-sm" target="_blank">
                            <i class="fas fa-external-link-alt me-1"></i> Live Demo
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            endif;
        endforeach; 
        
        if ($otherCount == 0):
        ?>
        <div class="col-12">
            <div class="alert alert-info">
                No other projects available at the moment.
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php include 'footer.php'; ?>