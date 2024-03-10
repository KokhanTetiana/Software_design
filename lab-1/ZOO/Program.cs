using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ZOO
{
    public class Program
    {
        public static void Main(string[] args)
        {
            Console.OutputEncoding = Encoding.Unicode;
            Console.InputEncoding = Encoding.Unicode;

            Types lionType = new Types("Лев");
            Types giraffeType = new Types("Жираф");
            Types elephantType = new Types("Слон");
            Types tigerType = new Types("Тигр");
            Types peacockType = new Types("Павлін");
            Types owlType = new Types("Сова");
            Types crocodileType = new Types("Крокодил");
            Types turtleType = new Types("Черепаха");
            Types hippopotamusType = new Types("Бегемот");
            Types lizardType = new Types("Ящірка");
            Types kangarooleType = new Types("Кенгуру");
            Types ostrichType = new Types("Страус");


            Animal[] animals = new Animal[]
            {
            new Animal("Сімба", 3, lionType, "Велика клітка", "залізна", "M'ясо", "Олег"),
            new Animal("Мелоді", 5, giraffeType, "Високий вольєр", "дерев'яна", "Рослинна їжа", "Олена"),
            new Animal("Дамбо", 8, elephantType, "Великий вольєр", "залізна", "Овочі", "Михайло"),
            new Animal("Джоні", 10, tigerType, "Середня клітка", "залізна", "М'ясо", "Юра"),
            new Animal("Роккі", 2, peacockType, "Невелика клітка", "Залізна", "Зерно", "Юлія"),
            new Animal("Соня", 15, owlType, "Маленька клітка", "дерев'яна", "Гризуни", "Юлія"),
            new Animal("Дін", 4, crocodileType, "Велика клітка з водою", "Залізна", "M'ясо", "Олег"),
            new Animal("Міні", 20, turtleType, "Маленька клітка (з водою)", "дерев'яна", "Рослинна їжа", "Ольга"),
            new Animal("Рим", 9, hippopotamusType, "Велика клітка", "Залізна", "M'ясо", "Олег"),
            new Animal("Рікі", 8, kangarooleType, "Високий вольєр", "дерев'яна", "Рослинна їжа", "Олена"),
            new Animal("Ронні", 4, kangarooleType, "Високий вольєр", "дерев'яна", "Рослинна їжа", "Олена"),
            new Animal("Жонні", 12, ostrichType, "Висока клітка", "дерев'яна", "Рослинна їжа", "Юлія"),
            new Animal("Сніжинка", 10, owlType, "Маленька клітка", "дерев'яна", "Гризуни", "Юлія"),
            new Animal("Пірат", 10, owlType, "Маленька клітка", "дерев'яна", "Гризуни", "Юлія"),
            new Animal("Донні", 7, crocodileType, "Велика клітка з водою", "Залізна", "M'ясо", "Олег"),
            new Animal("Моні", 17, turtleType, "Маленька клітка (з водою)", "дерев'яна", "Рослинна їжа","Ольга"),
            new Animal("Мані", 10, turtleType, "Маленька клітка (з водою)", "дерев'яна", "Рослинна їжа","Ольга"),
            new Animal("Віра", 10, lizardType, "Маленька клітка", "дерев'яна", "Рослинна їжа","Марія"),
            };



            Employee[] employees = new Employee[]
            {
            new Employee("Іван", "Ветеринар"),
            new Employee("Мілана", "Керівник зоопарку"),
            new Employee("Олег", "Доглядач"),
            new Employee("Олена", "Доглядач"),
            new Employee("Михайло", "Доглядач"),
            new Employee("Юра", "Доглядач"),
            new Employee("Юлія", "Доглядач"),
            new Employee("Ольга", "Доглядач"),
            new Employee("Марія", "Доглядач"),
            new Employee("Дмитро", "Прибиральник території"),
            };


            while (true)
            {
                Console.WriteLine("\nОберіть опцію:");
                Console.WriteLine("1. Пошук тварин");
                Console.WriteLine("2. Перегляд працівників");
                Console.WriteLine("3. Вихід");

                string choice = Console.ReadLine();

                switch (choice)
                {
                    case "1":
                        DisplayAnimalInformation(animals);
                        break;
                    case "2":
                        DisplayEmployeeInformation(employees);
                        break;
                    case "3":
                        return;
                    default:
                        Console.WriteLine("Введено некоректну опцію. Будь ласка, спробуйте ще раз.");
                        break;
                }
            }

        }

        static void DisplayAnimalInformation(Animal[] animals)
        {
            Console.Write("Введіть вид тварини: ");
            string speciesType = Console.ReadLine().ToLower();
            bool found = false;


            Dictionary<string, List<Animal>> animalGroups = new Dictionary<string, List<Animal>>();


            foreach (var animal in animals)
            {
                string typeKey = animal.Type.Type.ToLower();
                if (!animalGroups.ContainsKey(typeKey))
                {
                    animalGroups[typeKey] = new List<Animal>();
                }
                animalGroups[typeKey].Add(animal);
            }


            if (animalGroups.ContainsKey(speciesType))
            {
                Console.WriteLine($"\nІнформація про тварини виду '{speciesType}':");
                foreach (var animal in animalGroups[speciesType])
                {
                    animal.DisplayInfo();
                    found = true;
                    Console.WriteLine("----------------------");
                }
            }

            if (!found)
            {
                Console.WriteLine("На жаль, в зоопарку немає такої тварини.");
            }
        }

        static void DisplayEmployeeInformation(Employee[] employees)
        {
            Console.WriteLine("Інформація про працівників зоопарку:\n");
            foreach (var employee in employees)
            {
                Console.WriteLine($"Ім'я: {employee.Name}, Посада: {employee.Position}");
            }
        }
    }
}
