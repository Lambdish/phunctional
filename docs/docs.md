# Lambdish Phunctional Docs

## ✨ Available functions

 * [all](functions/all.md): Check if all the values of the collection satisfies the function
 * [any](functions/any.md): Check if any value of the collection satisfies the function
 * [apply](functions/apply.md): Call a function with the desired arguments (a clean way to call closures stored in class attributes)
 * [assoc](functions/assoc.md): Associate a value to an array
 * [butlast](functions/butlast.md):  Returns all the elements of a collection except the last preserving the keys
 * [complement](functions/complement.md): Returns another function that takes the same arguments and has the opposite truth value.
 * [compose](functions/compose.md): Combine multiple function calls in one function
 * [constant](functions/constant.md): It wraps a value into a Closure, which return the same value whenever is called
 * [dissoc](functions/dissoc.md): Dissociate a value of a key in a collection
 * [do_if](functions/do_if.md): Returns a callable that will call the given function if the result of applying the callable arguments to the predicates is true for all of them
 * [each](functions/each.md): Apply a function over all the items of a collection
 * [filter](functions/filter.md): Discriminate the items of a collection for which function is false
 * [filter_fresh](functions/filter_fresh.md): Similar to filter, but returns a collection that starts at 0
 * [filter_null](functions/filter_null.md): Discriminate the items of a collection for which value is null
 * [first](functions/first.md): Returns the first element of a collection
 * [flat_map](functions/flat_map.md): Returns an array containing the results of applying a given function to the items of a collection and flattening the results
 * [flatten](functions/flatten.md): Returns a flat collection from a multidimensional collection
 * [get](functions/get.md): Returns the value of an item in a collection or a default value in the case it does not exists
 * [get_each](functions/get_each.md): Returns an array with the values or a default value in the case it does not exist of each item in a collection
 * [get_in](functions/get_in.md): Returns the value in a nested associative structure or a default value in the case it does not exists
 * [group_by](functions/group_by.md): Returns an array with the items grouped by the results of applying a function to each item
 * [key](functions/key.md): Returns the key of an item value in a collection or a default value in the case it does not exists
 * [identity](functions/identity.md): Returns the same value that is passed as argument
 * [instance_of](functions/instance_of.md): Returns a checker that validated if an element is an instance of a class
 * [last](functions/last.md): Returns the last element of a collection
 * [map](functions/map.md): Apply a function over all the items of a collection and returns an array with the results
 * [memoize](functions/memoize.md): Returns a memoized version of a referentially transparent function
 * [not](functions/not.md): Return the opposite of the function call
 * [partial](functions/partial.md): Fix a number of arguments to a function producing another one with an smaller arity
 * [partition](functions/partition.md): Partition an array into arrays with size elements preserving its keys. The last portion may contain less than size elements.
 * [pipe](functions/pipe.md): Takes a set of functions and returns a new one that is the composition of all of them
 * [reduce](functions/reduce.md): Returns an accumulated value of iteratively reduce the collection using a function
 * [reindex](functions/reindex.md): Returns a new collection with the keys reindexed by a function.
 * [repeat](functions/repeat.md): Returns an array with the values of a function executed a certain amount of times
 * [rest](functions/rest.md): Returns all the the elements of a collection except the first preserving the keys
 * [reverse](functions/reverse.md): Returns a reversed collection preserving its keys
 * [search](functions/search.md): Search a value over a collection. Return the first occurrence if found, null if not
 * [sort](functions/sort.md): Sorts a collection using a sorting function
 * [some](functions/some.md): Check if any value of the collection satisfies the function
 * [to_array](functions/to_array.md): Transform a possible iterator to an array
