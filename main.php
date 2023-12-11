<!-- main.php -->

<?php

require_once 'User.php';
require_once 'Post.php';

// Create users
$user1 = new User('john_doe', 'john@example.com');
$user2 = new User('jane_doe', 'jane@example.com');

// Create posts
$post1 = new Post('Introduction to PHP', 'This is a PHP tutorial.', $user1);
$post2 = new Post('PHP Best Practices', 'Learn best practices in PHP programming.', $user2);

// Display post information
echo "Post 1:\n";
echo "Title: " . $post1->getTitle() . "\n";
echo "Content: " . $post1->getContent() . "\n";
echo "Author: " . $post1->getAuthor()->getUsername() . "\n\n";

echo "Post 2:\n";
echo "Title: " . $post2->getTitle() . "\n";
echo "Content: " . $post2->getContent() . "\n";
echo "Author: " . $post2->getAuthor()->getUsername() . "\n";
?>
