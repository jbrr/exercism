class Fixnum
  VERSION = 1

  def to_roman
    roman_map = [{1000 => "M"},
                 {900 => "CM"},
                 {500 => "D"},
                 {400 => "CD"},
                 {100 => "C"},
                 {90 => "XC"},
                 {50 => "L"},
                 {40 => "XL"},
                 {10 => "X"},
                 {9 => "IX"},
                 {5 => "V"},
                 {4 => "IV"},
                 {1 => "I"}]
    number = self

    roman_numeral = []
    while number > 0
      roman_map.each do |r_num|
        if number - r_num.keys[0] >= 0
          roman_numeral << r_num.values[0]
          number -= r_num.keys[0]
          redo
        end
      end
    end
    roman_numeral.join("")
  end
end
