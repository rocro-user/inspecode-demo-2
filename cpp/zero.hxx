#include <memory>
#include <vector>

class foo
{
	private:
		int x = 10;
		std::vector<int> v = {1, 2, 3, 4, 5};
};

class bar
{
	public:
		std::unique_ptr<int> p = std::make_unique<int>(5);
};
