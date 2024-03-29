# Explanations to the lab-1

## All classes are in the [folder](./ZOO).
I used the **DRY** principle to create objects for each type of [animal](./ZOO/Program.cs#L16-L27) and [worker](./ZOO/Program.cs#L54-L66).

**KISS** principle (simplicity). My code is quite simple and clear, which makes it easy to understand its functionality.

**SOLID**  (Single Responsibility Principle) principle. My methods are responsible for only one functionality: displaying information about [animals](./ZOO/Program.cs#L96-L132) or [employees](./ZOO/Program.cs#L134-L141).
Open/Closed Principle. You can easily add new types of animals or workers without changing the existing code.

**AGNI** principle. I add only the necessary functionality to interact with the user through the console interface.

**Composition Over Inheritance**. The Animal class uses composition to describe the type of [animal](./ZOO/Animal.cs#L30-L39). It contains the [Type](./ZOO/Animal.cs#L13) property, which is an object of the Types class.

In my code, the **Fail Fast** principle is used by checking the correctness of the [entered data](./ZOO/Program.cs#L89) and displaying a [message](./ZOO/Program.cs#L130) to the user about incorrect input data or options.