<?php

function create_contact_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_form';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(100) NOT NULL,
        email varchar(100) NOT NULL,
        subject varchar(255) NOT NULL,
        message text NOT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

// Hook the function to run when the theme is activated
add_action('after_switch_theme', 'create_contact_table');

function handle_contact_form_submission() {
    if ( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']) ) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'contact_form';

        // Sanitize the form inputs
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $subject = sanitize_text_field($_POST['subject']);
        $message = sanitize_textarea_field($_POST['message']);

        // Insert the data into the custom table
        $wpdb->insert(
            $table_name,
            array(
                'name' => $name,
                'email' => $email,
                'subject' => $subject,
                'message' => $message,
            ),
            array(
                '%s', // string format
                '%s', // string format
                '%s', // string format
                '%s'  // string format
            )
        );
        
        // Redirect to a thank you page (optional)
        wp_redirect(home_url('/thank-you'));
        exit;
    }
}
add_action('init', 'handle_contact_form_submission');

// Add a custom menu for Contact Us data in the admin dashboard
function add_contact_menu() {
    add_menu_page(
        'Contact Us Submissions',        // Page title
        'Contact Us Submissions',        // Menu title
        'manage_options',                // Capability (administrator only)
        'contact_us_submissions',        // Menu slug
        'display_contact_us_data',       // Function to display the content
        'dashicons-email-alt',           // Icon
        6                                // Menu position
    );
}
add_action('admin_menu', 'add_contact_menu');

// Function to display contact form data
function display_contact_us_data() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_form';  // Table name
    
    // Fetch the data from the contact_form table
    $results = $wpdb->get_results( "SELECT * FROM $table_name", ARRAY_A );
    
    if (!empty($results)) {
        echo '<div class="wrap">';
        echo '<h1>Contact Us Submissions</h1>';
        echo '<table class="wp-list-table widefat fixed striped table-view-list posts">';
        echo '<thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Subject</th><th>Message</th><th>Date</th></tr></thead>';
        echo '<tbody>';
        
        foreach ($results as $row) {
            echo '<tr>';
            echo '<td>' . esc_html($row['id']) . '</td>';
            echo '<td>' . esc_html($row['name']) . '</td>';
            echo '<td>' . esc_html($row['email']) . '</td>';
            echo '<td>' . esc_html($row['subject']) . '</td>';
            echo '<td>' . esc_html($row['message']) . '</td>';
            echo '<td>' . esc_html($row['created_at']) . '</td>';
            echo '</tr>';
        }
        
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
    } else {
        echo '<div class="wrap"><h1>No submissions found</h1></div>';
    }
}

// Handle newsletter form submission
function handle_newsletter_submission() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'])) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'newsletter_subscribers';
        $email = sanitize_email($_POST['email']);
        
        // Check if the email is valid
        if (is_email($email)) {
            // Insert email into the newsletter table
            $wpdb->insert($table_name, array('email' => $email));

            // Redirect or show a success message
            //echo '<p class="success-message">Thank you for subscribing to our newsletter!</p>';
        } else {
            // Show error if the email is invalid
            //echo '<p class="error-message">Please enter a valid email address.</p>';
        }
       
        wp_redirect(home_url('/newsletter'));
        exit;
    }
}
add_action('wp', 'handle_newsletter_submission');

