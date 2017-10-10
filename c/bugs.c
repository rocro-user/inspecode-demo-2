int deref(int *i) {
  *i = 9;
  return *i;
}

void deref_test() {
  int *ptr = 0;
  deref(ptr);
}
