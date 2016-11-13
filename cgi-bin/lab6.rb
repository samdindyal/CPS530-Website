#!/usr/bin/ruby

require 'cgi'

puts "Content-type: text/html\n\n"

cgi = CGI.new
fname = CGI.escape cgi['fname']
lname = CGI.escape cgi['lname']
address = CGI.escape cgi['address'].split.map(&:capitalize).join(' ')
phone = CGI.escape cgi['phone']

puts <<-HTML
  <div id="content"><h1>Thank you for your submission, #{fname} !</h1>
    <h3>Your information is as follows:</h3><br>
    <ul>
        <li class="list-item">First Name: #{fname}</li>
        <li class="list-item">Last Name: #{lname}</li>
        <li class="list-item">Address: #{address}</li>
        <li class="list-item">Phone:
HTML

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

puts <<-HTML
    </li>
  </ul>
</div>
HTML
