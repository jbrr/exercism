class Robot
  attr_reader :name

  def initialize
    @name = generate_name
  end

  def generate_name
    char_name = (0...2).map { (65 + rand(26)).chr }.join
    num_name = (0...3).map { rand(9) }.join
    char_name + num_name
  end

  def reset
    @name = generate_name
  end
end
