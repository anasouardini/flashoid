import { DictionaryBreif } from "@/types/Home";

interface Props {
    popularDictionaries: DictionaryBreif[]
}
export default function PopularDictionaries(props: Props) {
    return (
        <>
            <h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Popular Dictionaries</h2>
            <div className="flex flex-wrap py-7">
                {
                    props.popularDictionaries.map((popular) => {
                        return (
                            <div key={popular.name} className="mr-4 mb-4">
                                <h3>{popular.name}</h3>
                                <span className="text-sm text-gray-500">{popular.description}</span>
                            </div>
                        );
                    })
                }
            </div>
        </>
    );
}