#!/usr/bin/ruby

require 'cgi'

puts "Content-type: text/html\n\n"

cgi = CGI.new
fname = CGI.escape cgi['fname']
lname = CGI.escape cgi['lname']
address = cgi['address'].split.map(&:capitalize).join(' ')
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

sets = phone.split('-')
phone = "<span class=\"num-set\">(#{sets[0]}) </span>"

sets.drop(1).each_with_index do |set, index|
  sets[index+1] = "<span class=\"num-set\">#{set}</span>"
end

phone += sets.drop(1).join('-')

puts <<-HTML
    #{phone}
    </li>
  </ul>
</div>
HTML
