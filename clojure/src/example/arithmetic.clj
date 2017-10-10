(ns example.arithmetic
  "This is an example namespace containing codes to simplify.")

(defn hypot [x y]
  (Math/sqrt (+ (Math/pow x 2) (Math/pow y 2))))

(defn round [x]
  (long (+ x 0.5)))
