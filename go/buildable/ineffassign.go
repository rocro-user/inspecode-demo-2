package buildable

var b bool

func _() {
	var x int
	x = 0
	_ = x
}

func _() {
	var x int
	x = 0
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
	x = 0 //x
	x = 0
	_ = x
}
