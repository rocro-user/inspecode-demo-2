(ns example.sub.misc
  "This is an example namespace containing codes to simplify.")

(defn str-join [x y]
  (apply str (interpose x y)))

(defn not-eq [x b]
  (not (= x b)))
