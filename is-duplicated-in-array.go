package main

func main() {
	numbers := [10]int{10, 20, 30, 40, 50, 60, 70, 80, 90, 90}
	println(isDuplicate(numbers))
}

func isDuplicate(numbers [10]int) bool {
	seen := make(map[int]bool)
	for _, number := range numbers {
		if seen[number] {
			return true
		}
		seen[number] = true
	}
	return false
}
