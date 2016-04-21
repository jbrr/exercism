class Squares
  attr_reader :numbers
  VERSION = 2

  def initialize(number)
    @numbers = all_numbers(number)
  end

  def all_numbers(number)
    number_array = []
    until number == 0
      number_array << number
      number -= 1
    end
    number_array
  end

  def square_of_sum
    sum = 0
    numbers.each do |number|
      sum += number
    end
    sum ** 2
  end

  def sum_of_squares
    sum = 0
    numbers.each do |number|
      sum += (number ** 2)
    end
    sum
  end

  def difference
    (sum_of_squares - square_of_sum).abs
  end
end
