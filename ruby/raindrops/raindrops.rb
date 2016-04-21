class Raindrops
  VERSION = 1

  def self.convert(number)
    response = check_primes(number)
    if response == []
      response << number
    end
    response.join("")
  end

  def self.check_primes(number)
    raindrops_hash = {3 => "Pling", 5 => "Plang", 7 => "Plong"}
    response = []
    raindrops_hash.keys.each do |key|
      if number % key == 0
        response << raindrops_hash[key]
      end
    end
    response
  end
end
