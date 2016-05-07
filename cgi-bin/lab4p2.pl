#!/usr/bin/perl
use CGI':standard';
use strict;
print "Content-type: text/html\n\n";


print '<link rel="stylesheet" href="../styles/styles.css" charset="utf-8">
<link rel="stylesheet" href="../styles/lab4p2.css" charset="utf-8">';

my $title = param('title');
my $artist = param('artist');
my $album = param('album');
my $year = param('year');
my $rating = param('rating');
my $email = param('email');
my $subscribe = param('subscribe');

print "<h1>Thank you!</h1>";
print "<p>Your submission for <b>$title</b> by <b>$artist</b> has been successfully recorded.</p>";

print "<p>";
print "<h3>Your Submission:</h3>";
print "<b>Title</b>: $title<br>";
print "<b>Artist</b>: $artist<br>";
print "<b>Album</b>: $album<br>";
print "<b>Released In: </b> $year<br>";
print "<b>Your Rating:</b> $rating/5<br><br>";
print "<b>Email Address:</b> $email<br>";

if ($subscribe eq "on"){
  print "Thank you for subscribing!";
}

print "</p>";
