int div(int numerator, int denominator) {
	return numerator / denominator;
}

void div_test() {
	for (int i = 0; i < 10; i++) {
		div(i, i);
	}
}
