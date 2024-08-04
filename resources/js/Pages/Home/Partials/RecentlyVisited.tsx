import { Dictionary } from "@/types/Database";

interface Props {
    recentlyVisited: Dictionary[]
}
export default function RecentlyVisited(props: Props) {
    // console.log(props.recentlyVisited)
    return (
        <>
            <h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Recently Visited</h2>
            <div className="flex flex-wrap py-7">
                {
                    props.recentlyVisited.map((recent) => {
                        return (
                            <a key={recent.name} href={`/dictionaries/${recent.id}`}>
                                <div className="mr-4 mb-4">
                                    <h3>{recent.name}</h3>
                                    <span className="text-sm text-gray-500">{recent.description}</span>
                                </div>
                            </a>
                        );
                    })
                }
            </div>
        </>
    );
}