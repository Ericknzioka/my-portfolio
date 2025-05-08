// Admin JavaScript Functions
$(document).ready(function() {
    // Profile form submission
    $('#profileForm').on('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        
        $.ajax({
            type: 'POST',
            url: 'process/update_profile.php',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                alert('Profile updated successfully!');
                $('#profileModal').modal('hide');
                location.reload();
            },
            error: function() {
                alert('Error updating profile. Please try again.');
            }
        });
    });
    
    // About form submission
    $('#aboutForm').on('submit', function(e) {
        e.preventDefault();
        
        const aboutText = $('#aboutText').val();
        
        $.ajax({
            type: 'POST',
            url: 'process/update_about.php',
            data: {
                about: aboutText
            },
            success: function(response) {
                alert('About section updated successfully!');
                $('#aboutModal').modal('hide');
                $('.about-text').text(aboutText);
            },
            error: function() {
                alert('Error updating about section. Please try again.');
            }
        });
    });
    
    // Add Skill form submission
    $('#addSkillForm').on('submit', function(e) {
        e.preventDefault();
        
        const name = $('#skillName').val();
        const percentage = $('#skillPercentage').val();
        
        $.ajax({
            type: 'POST',
            url: 'process/add_skill.php',
            data: {
                name: name,
                percentage: percentage
            },
            success: function(response) {
                alert('Skill added successfully!');
                $('#addSkillModal').modal('hide');
                location.reload();
            },
            error: function() {
                alert('Error adding skill. Please try again.');
            }
        });
    });
    
    // Edit Skill form initialization
    $(document).on('click', '.edit-skill', function() {
        const id = $(this).data('id');
        const name = $(this).data('name');
        const percentage = $(this).data('percentage');
        
        $('#editSkillId').val(id);
        $('#editSkillName').val(name);
        $('#editSkillPercentage').val(percentage);
        $('#editPercentageValue').text(percentage + '%');
        
        $('#editSkillModal').modal('show');
    });
    
    // Edit Skill form submission
    $('#editSkillForm').on('submit', function(e) {
        e.preventDefault();
        
        const id = $('#editSkillId').val();
        const name = $('#editSkillName').val();
        const percentage = $('#editSkillPercentage').val();
        
        $.ajax({
            type: 'POST',
            url: 'process/update_skill.php',
            data: {
                id: id,
                name: name,
                percentage: percentage
            },
            success: function(response) {
                alert('Skill updated successfully!');
                $('#editSkillModal').modal('hide');
                location.reload();
            },
            error: function() {
                alert('Error updating skill. Please try again.');
            }
        });
    });
    
    // Delete Skill
    $(document).on('click', '.delete-skill', function() {
        if (confirm('Are you sure you want to delete this skill?')) {
            const id = $(this).data('id');
            
            $.ajax({
                type: 'POST',
                url: 'process/delete_skill.php',
                data: {
                    id: id
                },
                success: function(response) {
                    alert('Skill deleted successfully!');
                    location.reload();
                },
                error: function() {
                    alert('Error deleting skill. Please try again.');
                }
            });
        }
    });
    
    // Add Experience form submission
    $('#addExperienceForm').on('submit', function(e) {
        e.preventDefault();
        
        const position = $('#expPosition').val();
        const company = $('#expCompany').val();
        const startDate = $('#expStartDate').val();
        const endDate = $('#currentJob').is(':checked') ? null : $('#expEndDate').val();
        const description = $('#expDescription').val();
        
        $.ajax({
            type: 'POST',
            url: 'process/add_experience.php',
            data: {
                position: position,
                company: company,
                start_date: startDate,
                end_date: endDate,
                description: description
            },
            success: function(response) {
                alert('Experience added successfully!');
                $('#addExperienceModal').modal('hide');
                location.reload();
            },
            error: function() {
                alert('Error adding experience. Please try again.');
            }
        });
    });
    
    // Edit Experience form initialization
    $(document).on('click', '.edit-experience', function() {
        const id = $(this).data('id');
        const position = $(this).data('position');
        const company = $(this).data('company');
        const startDate = $(this).data('start');
        const endDate = $(this).data('end');
        const description = $(this).data('description');
        
        $('#editExpId').val(id);
        $('#editExpPosition').val(position);
        $('#editExpCompany').val(company);
        $('#editExpStartDate').val(startDate);
        
        if (endDate) {
            $('#editExpEndDate').val(endDate);
            $('#editCurrentJob').prop('checked', false);
            $('#editExpEndDate').prop('disabled', false);
        } else {
            $('#editExpEndDate').val('');
            $('#editCurrentJob').prop('checked', true);
            $('#editExpEndDate').prop('disabled', true);
        }
        
        $('#editExpDescription').val(description);
        
        $('#editExperienceModal').modal('show');
    });
    
    // Edit Experience form submission
    $('#editExperienceForm').on('submit', function(e) {
        e.preventDefault();
        
        const id = $('#editExpId').val();
        const position = $('#editExpPosition').val();
        const company = $('#editExpCompany').val();
        const startDate = $('#editExpStartDate').val();
        const endDate = $('#editCurrentJob').is(':checked') ? null : $('#editExpEndDate').val();
        const description = $('#editExpDescription').val();
        
        $.ajax({
            type: 'POST',
            url: 'process/update_experience.php',
            data: {
                id: id,
                position: position,
                company: company,
                start_date: startDate,
                end_date: endDate,
                description: description
            },
            success: function(response) {
                alert('Experience updated successfully!');
                $('#editExperienceModal').modal('hide');
                location.reload();
            },
            error: function() {
                alert('Error updating experience. Please try again.');
            }
        });
    });
    
    // Delete Experience
    $(document).on('click', '.delete-experience', function() {
        if (confirm('Are you sure you want to delete this experience?')) {
            const id = $(this).data('id');
            
            $.ajax({
                type: 'POST',
                url: 'process/delete_experience.php',
                data: {
                    id: id
                },
                success: function(response) {
                    alert('Experience deleted successfully!');
                    location.reload();
                },
                error: function() {
                    alert('Error deleting experience. Please try again.');
                }
            });
        }
    });
    
    // Add Education form submission
    $('#addEducationForm').on('submit', function(e) {
        e.preventDefault();
        
        const degree = $('#eduDegree').val();
        const institution = $('#eduInstitution').val();
        const year = $('#eduYear').val();
        const description = $('#eduDescription').val();
        
        $.ajax({
            type: 'POST',
            url: 'process/add_education.php',
            data: {
                degree: degree,
                institution: institution,
                graduation_year: year,
                description: description
            },
            success: function(response) {
                alert('Education added successfully!');
                $('#addEducationModal').modal('hide');
                location.reload();
            },
            error: function() {
                alert('Error adding education. Please try again.');
            }
        });
    });
    
    // Edit Education form initialization
    $(document).on('click', '.edit-education', function() {
        const id = $(this).data('id');
        const degree = $(this).data('degree');
        const institution = $(this).data('institution');
        const year = $(this).data('year');
        const description = $(this).data('description');
        
        $('#editEduId').val(id);
        $('#editEduDegree').val(degree);
        $('#editEduInstitution').val(institution);
        $('#editEduYear').val(year);
        $('#editEduDescription').val(description);
        
        $('#editEducationModal').modal('show');
    });
    
    // Edit Education form submission
    $('#editEducationForm').on('submit', function(e) {
        e.preventDefault();
        
        const id = $('#editEduId').val();
        const degree = $('#editEduDegree').val();
        const institution = $('#editEduInstitution').val();
        const year = $('#editEduYear').val();
        const description = $('#editEduDescription').val();
        
        $.ajax({
            type: 'POST',
            url: 'process/update_education.php',
            data: {
                id: id,
                degree: degree,
                institution: institution,
                graduation_year: year,
                description: description
            },
            success: function(response) {
                alert('Education updated successfully!');
                $('#editEducationModal').modal('hide');
                location.reload();
            },
            error: function() {
                alert('Error updating education. Please try again.');
            }
        });
    });
    
    // Delete Education
    $(document).on('click', '.delete-education', function() {
        if (confirm('Are you sure you want to delete this education entry?')) {
            const id = $(this).data('id');
            
            $.ajax({
                type: 'POST',
                url: 'process/delete_education.php',
                data: {
                    id: id
                },
                success: function(response) {
                    alert('Education deleted successfully!');
                    location.reload();
                },
                error: function() {
                    alert('Error deleting education. Please try again.');
                }
            });
        }
    });
    
    // Upload CV form submission
    $('#uploadCVForm').on('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        
        $.ajax({
            type: 'POST',
            url: 'process/upload_cv.php',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                alert('CV uploaded successfully!');
                $('#uploadCVModal').modal('hide');
                location.reload();
            },
            error: function() {
                alert('Error uploading CV. Please try again.');
            }
        });
    });
    
    // About modal initialization
    $('#aboutModal').on('show.bs.modal', function() {
        const currentText = $('.about-text').text().trim();
        $('#aboutText').val(currentText);
    });
    
    // Profile modal initialization
    $('#profileModal').on('show.bs.modal', function() {
        const name = $('h1.display-4').text().trim();
        const title = $('p.lead').text().trim();
        
        $('#profileName').val(name);
        $('#profileTitle').val(title);
    });
});