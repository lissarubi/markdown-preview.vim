file = File.open(ARGV[0])
data = file.read

require 'net/http'
require 'uri'

uri = URI.parse("http://localhost:8537")
request = Net::HTTP::Post.new(uri)
request.body = "data=#{data}"

req_options = {
  use_ssl: uri.scheme == "https",
}

response = Net::HTTP.start(uri.hostname, uri.port, req_options) do |http|
  http.request(request)
end
