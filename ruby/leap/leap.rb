class Year
  VERSION = 1
  
  def self.leap?(year)
    if year % 4 == 0
      if year % 100 == 0
        century_logic?(year)
      else
        true
      end
    else
      false
    end
  end

  def self.century_logic?(year)
    if year % 400 == 0
      true
    end
  end
end
