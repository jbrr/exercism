class Squares
  attr_reader :num

  def initialize(num)
    @num = num
  end

  def construct_array(num, sum)
    sum << num
    num -= 1
    num >= 1 ? construct_array(num, sum) : sum
  end

  def square_of_sum
    ary = construct_array(num, [])
    ary.reduce(:+) ** 2
  end

  def sum_squares(ary, sum = 0)
    if ary != []
      sum += ary[0] ** 2
      ary.shift
      sum_squares(ary, sum)
    else
      sum
    end
  end

  def sum_of_squares
    ary = construct_array(num, [])
    sum_squares(ary)
  end
end
