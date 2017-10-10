package buildable

import "testing"

func TestOK(t *testing.T) {}

func TestFail(t *testing.T) { t.Error("intentional failure") }
