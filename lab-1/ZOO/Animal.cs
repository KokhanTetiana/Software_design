using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ZOO
{
    public class Animal
    {
        public string Name { get; set; }
        public int Age { get; set; }
        public Types Type { get; set; }
        public string EnclosureSize { get; set; }
        public string EnclosureType { get; set; }
        public string Food { get; set; }
        public string Zookeeper { get; set; }

        public virtual void DisplayInfo()
        {
            Console.WriteLine($"Ім'я: {Name}");
            Console.WriteLine($"Тварина: {Type.Type}");
            Console.WriteLine($"Вік: {Age} роки/років");
            Console.WriteLine($"Розмір клітки: {EnclosureSize}");
            Console.WriteLine($"Тип клітки: {EnclosureType}");
            Console.WriteLine($"Харчується: {Food}");
            Console.WriteLine($"Відповідальний праціник: {Zookeeper}");
        }

        public Animal(string name, int age, Types type, string enclosureSize, string enclosureType, string food, string zookeeper)
        {
            Name = name;
            Age = age;
            Type = type;
            EnclosureSize = enclosureSize;
            EnclosureType = enclosureType;
            Food = food;
            Zookeeper = zookeeper;
        }
    }
}

