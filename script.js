// Document Ready Function
$(document).ready(function() {
    // Smooth scrolling for navigation links
    $('a.nav-link').on('click', function(e) {
        if (this.hash !== '') {
            e.preventDefault();
            const hash = this.hash;
            
            $('html, body').animate({
                scrollTop: $(hash).offset().top - 70
            }, 800);
        }
    });
    
    // Form validation for contact form
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();
        
        const name = $('#name').val();
        const email = $('#email').val();
        const subject = $('#subject').val();
        const message = $('#message').val();
        
        $.ajax({
            type: 'POST',
            url: 'process/contact.php',
            data: {
                name: name,
                email: email,
                subject: subject,
                message: message
            },
            success: function(response) {
                $('#contactResponse').html('<div class="alert alert-success">Message sent successfully!</div>');
                $('#contactForm')[0].reset();
            },
            error: function() {
                $('#contactResponse').html('<div class="alert alert-danger">Error sending message. Please try again later.</div>');
            }
        });
    });
    
    // Admin login form handling
    $('#loginForm').on('submit', function(e) {
        e.preventDefault();
        
        const username = $('#username').val();
        const password = $('#password').val();
        
        $.ajax({
            type: 'POST',
            url: 'process/login.php',
            data: {
                username: username,
                password: password
            },
            success: function(response) {
                if (response === 'success') {
                    window.location.reload();
                } else {
                    $('#loginMessage').text('Invalid username or password');
                }
            },
            error: function() {
                $('#loginMessage').text('Login failed. Please try again.');
            }
        });
    });
    
    // Range slider display value
    $('#skillPercentage').on('input', function() {
        $('#percentageValue').text($(this).val() + '%');
    });
    
    $('#editSkillPercentage').on('input', function() {
        $('#editPercentageValue').text($(this).val() + '%');
    });
    
    // Handle "Currently working here" checkbox
    $('#currentJob').on('change', function() {
        if ($(this).is(':checked')) {
            $('#expEndDate').val('').prop('disabled', true);
        } else {
            $('#expEndDate').prop('disabled', false);
        }
    });
    
    $('#editCurrentJob').on('change', function() {
        if ($(this).is(':checked')) {
            $('#editExpEndDate').val('').prop('disabled', true);
        } else {
            $('#editExpEndDate').prop('disabled', false);
        }
    });
});