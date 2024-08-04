import { DictionaryBreif } from "@/types/Home";
import PopularDictionaries from "./Partials/PopularDictionaries";
import RecentlyVisited from "./Partials/RecentlyVisited";
import StatsSummary from "./Partials/StatsSummary";
import TipsPopup from "./Partials/Tips";

interface Props {
    statsSummary: {},
    recentlyVisited: DictionaryBreif[],
    popularDictionaries: DictionaryBreif[]
}
export default function Home({ props }: { props: Props }) {
    return (
        <main className="w-[90vw] mx-auto pt-9">
            {/* <TipsPopup /> */}
            <StatsSummary statsSummary={props.statsSummary} />
            <RecentlyVisited recentlyVisited={props.recentlyVisited} />
            <PopularDictionaries popularDictionaries={props.popularDictionaries} />
        </main>
    )
}