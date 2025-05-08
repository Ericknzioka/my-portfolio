<?php
$pageTitle = "My Skills | My Portfolio";
include 'header.php';

// You can connect to a database here to retrieve your skills
// Define skills array (or retrieve from database)
$skillCategories = [
    'Programming Languages' => [
        ['name' => 'PHP', 'level' => 85],
        ['name' => 'JavaScript', 'level' => 80],
        ['name' => 'Python', 'level' => 75],
        ['name' => 'Java', 'level' => 65],
    ],
    'Frontend Technologies' => [
        ['name' => 'HTML5', 'level' => 90],
        ['name' => 'CSS3', 'level' => 85],
        ['name' => 'Bootstrap', 'level' => 80],
        ['name' => 'React', 'level' => 70],
    ],
    'Backend & Databases' => [
        ['name' => 'MySQL', 'level' => 80],
        ['name' => 'MongoDB', 'level' => 65],
        ['name' => 'Node.js', 'level' => 70],
        ['name' => 'Laravel', 'level' => 75],
    ],
    'Other Skills' => [
        ['name' => 'Git', 'level' => 75],
        ['name' => 'Docker', 'level' => 60],
        ['name' => 'AWS', 'level' => 65],
        ['name' => 'UI/UX Design', 'level' => 70],
    ]
];
?>

<div class="container py-5">
    <h1 class="display-4 mb-5">My Skills</h1>
    
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Overview</h5>
                    <p class="card-text">
                        I have experience in various technologies across the full stack development spectrum.
                        Below are my key skills categorized by area of expertise, showcasing my proficiency levels.
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <?php foreach ($skillCategories as $category => $skills): ?>
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header bg-light">
                    <h3><?php echo $category; ?></h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <?php foreach ($skills as $skill): ?>
                        <div class="col-md-6 mb-4">
                            <div class="skill-item">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="fw-bold"><?php echo $skill['name']; ?></span>
                                    <span><?php echo $skill['level']; ?>%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" 
                                        role="progressbar" 
                                        style="width: <?php echo $skill['level']; ?>%" 
                                        aria-valuenow="<?php echo $skill['level']; ?>" 
                                        aria-valuemin="0" 
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header bg-light">
                    <h3>Soft Skills</h3>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card h-100 soft-skill-card">
                                <div class="card-body">
                                    <i class="fas fa-users fa-3x mb-3 text-primary"></i>
                                    <h5 class="card-title">Team Collaboration</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card h-100 soft-skill-card">
                                <div class="card-body">
                                    <i class="fas fa-lightbulb fa-3x mb-3 text-warning"></i>
                                    <h5 class="card-title">Problem Solving</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card h-100 soft-skill-card">
                                <div class="card-body">
                                    <i class="fas fa-comments fa-3x mb-3 text-info"></i>
                                    <h5 class="card-title">Communication</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card h-100 soft-skill-card">
                                <div class="card-body">
                                    <i class="fas fa-clock fa-3x mb-3 text-success"></i>
                                    <h5 class="card-title">Time Management</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>