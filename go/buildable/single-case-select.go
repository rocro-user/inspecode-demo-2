// https://raw.githubusercontent.com/dominikh/go-simple/master/testdata/single-case-select.go

package buildable

func fn() {
	var ch chan int
	// MATCH /should use a simple channel send/
	<-ch

outer:
	// MATCH /should use for range/

	for range ch {

		break outer

	}

	// MATCH /should use for range/

	for x := range ch {

		_ = x

	}

	for {
		// MATCH /should use a simple channel send/
		ch <- 0

	}
}
