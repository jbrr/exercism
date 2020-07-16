package acronym

import (
	re "regexp"
	str "strings"
)

func isSeparator(c rune) bool {
	seps := []string{
		"-",
		" ",
		"_",
	}
	for i := range seps {
		if seps[i] == string(c) {
			return true
		}
	}
	return false
}

func Abbreviate(s string) string {
	reAcronym := re.MustCompile(`\b[[:alpha:]]`)
	words := str.FieldsFunc(s, isSeparator)
	res := ""
	for i := range words {
		match := reAcronym.FindString(words[i])
		res += str.ToUpper(match)
	}
	return res
}
