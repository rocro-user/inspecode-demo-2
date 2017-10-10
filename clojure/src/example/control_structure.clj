(ns example.control-structure
  "This is an example namespace that does not containing codes to simplify.")

(defn not-empty [a]
  (seq a))

(defn update-by-fn [coll k f]
  (update-in coll [k] f))
