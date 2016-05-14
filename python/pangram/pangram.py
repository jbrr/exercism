def is_pangram(phrase):
    alpha = "abcdefghijklmnopqrstuvwxyz"
    result = ""
    phrase = phrase.lower()
    for letter in phrase:
        if letter in alpha:
            if letter not in result:
                result += letter
    result = "".join(sorted(result))

    if result == alpha:
        return True
    else:
        return False
