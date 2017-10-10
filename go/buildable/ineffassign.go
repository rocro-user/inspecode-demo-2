package buildable

var b bool

func _() {
	var x int

	_ = x
}

func _() {
	var x int

	if b {
		_ = x
	}
}

func _() {
	var x int
	_ = x
	x = 0 //x
}

func _() {
	var x int
	//x
	x = 0
	_ = x
}
