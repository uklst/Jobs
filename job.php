// Set the job details
$job_title = 'Software Engineer';
$job_description = 'We are looking for a talented software engineer to join our team. You will be responsible for designing and implementing new features for our products, as well as maintaining and improving existing code.';
$job_location = 'San Francisco, CA';
$application_deadline = '2023-01-31';
$job_type = 'Full-time';
$company_name = 'Acme Corp.';
$salary_range = '$100,000 - $120,000 per year';
$required_qualifications = array('Bachelor's degree in Computer Science or a related field', '5+ years of experience as a software engineer', 'Expertise in PHP and JavaScript');

// Create a new post
$post_id = wp_insert_post(array(
    'post_title' => $job_title,
    'post_content' => $job_description,
    'post_status' => 'publish',
    'post_type' => 'job'
));

// Check if the post was created successfully
if (is_wp_error($post_id)) {
    // There was an error creating the post
    $error_message = $post_id->get_error_message();
    echo "Error creating job post: $error_message";
} else {
    // The post was created successfully
    // Set the job location
    update_post_meta($post_id, 'job_location', $job_location);

    // Set the application deadline
    update_post_meta($post_id, 'application_deadline', $application_deadline);

    // Set the job type
    update_post_meta($post_id, 'job_type', $job_type);

    // Set the company name
    update_post_meta($post_id, 'company_name', $company_name);

    // Set the salary range
    update_post_meta($post_id, 'salary_range', $salary_range);

    // Set the required qualifications
    update_post_meta($post_id, 'required_qualifications', $required_qualifications);

    echo 'Job posted successfully!';
}
