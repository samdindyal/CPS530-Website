#!/usr/bin/ruby

require 'cgi'

puts "Content-type: text/html\n\n"

cgi = CGI.new
fname = cgi['fname']
lname = cgi['lname']
address = cgi['address'].split.map(&:capitalize).join(' ')
phone = cgi['phone']

puts "<div id=\"content\"><h1>Thank you for your submission, #{fname} !</h1>"
puts "<h3>Your information is as follows:</h3><br>"
puts "<ul>"
puts "<li class=\"list-item\">First Name: #{fname}</li>"
puts "<li class=\"list-item\">Last Name: #{lname}</li>"
puts "<li class=\"list-item\">Address: #{address}</li>"
puts "<li class=\"list-item\">Phone:"

phone.split('-').each_with_index do |set, index|
  if index == 0
    puts "<span class=\"num-set\">(#{set})"
  else
    puts "<span class=\"num-set\">#{set}"
  end
  if index < phone.split('-').size - 1
    puts "-"
  end
  puts "</span>"
end

puts "</li>"
puts "</ul>"
puts "</div>"
