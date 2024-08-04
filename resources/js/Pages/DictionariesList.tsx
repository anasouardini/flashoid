import { Dictionary } from "@/types/Database"

interface Props {
    dictionaries: {
        data: Dictionary[];
        // other data goes here: like currentPage, etc
    }
}
export default function DictionariesList(props: Props) {
    const paginatedDictionaries = props.dictionaries;

    return <main>
        <h1>Dictionaries List</h1>
        {
            paginatedDictionaries.data.map((dictionary) => {
                return <a href={`/dictionaries/${dictionary.id}`} key={dictionary.id}>{dictionary.name}</a>
            })
        }
    </main>
}